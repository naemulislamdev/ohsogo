<?php

namespace App\Http\Controllers\Web;

use App\ClientReview;
use App\CPU\BackEndHelper;
use App\CPU\Helpers;
use App\CPU\OrderManager;
use App\CPU\ProductManager;
use App\CPU\CartManager;
use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\Model\Banner;
use App\Model\Brand;
use App\Model\BusinessSetting;
use App\Model\Cart;
use App\Model\CartShipping;
use App\Model\Category;
use App\Model\Contact;
use App\Model\DealOfTheDay;
use App\Model\FlashDeal;
use App\Model\FlashDealProduct;
use App\Model\HelpTopic;
use App\Model\OrderDetail;
use App\Model\Product;
use App\Model\Review;
use App\Model\Seller;
use App\Model\Subscription;
use App\Model\ShippingMethod;
use App\Model\Shop;
use App\Model\Order;
use App\Model\Transaction;
use App\Model\Translation;
use App\User;
use App\Model\Wishlist;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Session;
// use function App\CPU\translate;
// use App\Model\ShippingType;
// use Facade\FlareClient\Http\Response;
// use Gregwar\Captcha\PhraseBuilder;
// use Gregwar\Captcha\CaptchaBuilder;
// use App\CPU\CustomerManager;
// use App\CPU\Convert;
// use App\Model\Branch;
// use App\ProductLandingPage;
// use Carbon\Carbon;

class WebController extends Controller
{

    public function maintenance_mode()
    {

        $maintenance_mode = Helpers::get_business_settings('maintenance_mode') ?? 0;
        if ($maintenance_mode) {
            return view('web-views.maintenance-mode');
        }
        return redirect()->route('home');
    }
    public function shopAllNewDrops()
    {
        $products = $products = Product::where("featured_status", 1)->paginate(12);

        return view("web-views.shop", compact("products"));
    }
    public function home()
    {

        $banners = Banner::where("published", "1")->get();
        $newDropProducts =  Product::with(['reviews'])->active()
            ->where('featured', 1)
            ->withCount(['order_details'])->orderBy('order_details_count', 'DESC')
            ->take(12)
            ->latest()
            ->get();

        // get Recently viewed products
        $viewedProducts = session()->get('viewed_products', []);
        $recentlyViewed = collect();

        if (!empty($viewedProducts)) {
            $recentlyViewed = Product::whereIn('id', $viewedProducts)->latest()->get();
        }

        return view("web-views.home", compact("newDropProducts", "banners", "recentlyViewed"));
    }

    public function about()
    {
        return view("web-views.about");
    }
    public function contact()
    {
        return view("web-views.contact");
    }
    public function cart()
    {
        return view('web-views.cart');
    }
    public function showCollections($slug)
    {

        $getCat = null;
        $products = collect();
        $catName = '';

        if ($category = Category::where('slug', $slug)->first()) {
            $getCat = $category;
            $products = Product::where('category_id', $getCat->id)->paginate(20);

            $catName = $getCat->name;
        } else if ($subCategory = SubCategory::where('slug', $slug)->first()) {
            $getCat = $subCategory;
            $products = Product::where('sub_category_id', $getCat->id)->paginate(20);

            $catName = $getCat->name;
        } else if ($subSubCategory = SubSubCategory::where('slug', $slug)->first()) {
            $getCat = $subSubCategory;
            $products = Product::where('sub_sub_category_id', $getCat->id)->paginate(20);
            $catName = $getCat->name;
        }
        if($slug == "all") {
            $products = Product::paginate(20);
            $catName = "All Products";
        }

        return view('web-views.collections', compact('products', 'catName'));
    }

    public function showBrandCollections($slug)
    {
        $products = collect();
        $catName = '';
        $products = Product::where('slug', 'like', '%' . $slug . '%')->orWhere('name', 'like', '%' . $slug . '%')->get();

        $catName = $slug;


        return view('web-views.collections', compact('products', 'catName'));
    }
    public function productCheckout()
    {
        $carts = session()->get("cart");
        return view('web-views.product-checkout', compact("carts"));
    }
    public function productDetails($slug)
    {
        $product = Product::where('slug', $slug)->first();

        // start Recently Viewed product in session
        $viewedProducts = session()->get('viewed_products', []);

        if (!in_array($product->id, $viewedProducts)) {
            array_unshift($viewedProducts, $product->id);

            $viewedProducts = array_slice($viewedProducts, 0, 10);

            session(['viewed_products' => $viewedProducts]);
        }
        // end recently viewed product in session

        // find Related products
        $query = Product::query()
            ->where('id', '!=', $product->id); // current product bade

        if ($product->sub_sub_category_id) {
            $query->where('sub_sub_category_id', $product->sub_sub_category_id);
        } elseif ($product->sub_category_id) {
            $query->where('sub_category_id', $product->sub_category_id);
        } else {
            $query->where('category_id', $product->category_id);
        }

        $brelatedProducts = $query->take(8)->get();

        if ($product) {
            return view('web-views.product-details', compact('product', 'brelatedProducts'));
        } else {
            return redirect("/");
        }
    }
    public function shop_cart()
    {
        if (session()->has('cart') && count(session('cart')) > 0) {
            // dd(session('cart'));
            return view('web-views.shop-cart');
        }
        Toastr::info('No items in your basket!');
        return redirect('/');
    }

    public function orderStore(Request $request)
    {

        $request->validate([
            // 1. Phone or Email
            'phone_email' => ['required', 'string'],
            // 2. Notify offer (checkbox)
            'notify_offer' => ['nullable', 'boolean'],
            // 3. Country
            'country' => ['required', 'string'],
            // 4. Nam
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:10'],
            // 5. Addres
            'address' => ['nullable', 'string'],
            // 6. Apartment (optional)
            'apartment' => ['nullable', 'string', 'max:255'],

            // 7. City
            'city' => ['required', 'string', 'max:100'],

            // 8. Emirate (ONLY for UAE)
            'emirate' => ['required_if:country,United Arab Emirates', 'nullable', 'string'],

            // 10. Phone
            'phone' => ['required', 'max:20'],

            // 11. Save info (checkbox)
            'save_info' => ['nullable', 'boolean'],

            // 12. Shipping method
        ]);

        Order::create([
            'phone_email' => $request->phone_email,
            'notify_offer' => $request->notify_offer,
            'country' => $request->country,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'appartment' => $request->appartment,
            'city' => $request->city,
            'emirate' => $request->emirate,
            'phone' => $request->phone,
            'save_info' => $request->save_info,
        ]);


        return redirect()->back()->with('success', 'Order Placed successfully!');
    }




}
