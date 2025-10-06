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
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function home()
    {
        $newDropProducts =  Product::take(6)->get(); //latest()->take(5)->

        return view("web-views.home", compact("newDropProducts"));
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
    public function page()
    {
        return view('web-views.page');
    }
    public function productCheckout()
    {
        return view('web-views.product-checkout');
    }
    public function productDetails($id)
    {
        $product = Product::find($id);

        return view('web-views.product-details', compact('product'));
    }
}
