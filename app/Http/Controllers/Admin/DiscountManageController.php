<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use App\Models\FlatDiscount;
use Illuminate\Http\Request;

class DiscountManageController extends Controller
{
    public function discountFlat()
    {
        // Logic for displaying flat discounts
        $flatDiscounts = FlatDiscount::with('category')->get(); // Assuming you have a FlatDiscount model with a relationship to Category
        return view('admin-views.discount-manage.flat.index', compact('flatDiscounts'));
    }

    public function discountFlatCreate()
    {
        // Logic for creating a flat discount
        $categories = Category::where(['parent_id' => 0])->get(); // Assuming you have a Category model
        return view('admin-views.discount-manage.flat.create', compact('categories'));
    }

    public function discountFlatStore(Request $request)
    {
        // Validate the request data
        $request->validate([
            'category' => 'required|string',
            'discount_amount' => 'required|numeric|min:0',
            'discount_type' => 'required|in:flat,percentage',
        ]);
        // Logic for storing a flat discount
        // Create a new flat discount record in the database
        $category = Category::find($request->category);
        $discountAmount = $request->discount_amount;
        $discountType = $request->discount_type;
        $products = Product::where('status',1)->get();
        foreach ($products as $product) {
            $categoryIds = json_decode($product->category_ids, true);
            $ids = array_column($categoryIds, 'id');
            dd($ids);
            $category = in_array($request->category, $categoryIds) ? $category : null;
            // if ($category->id == $product->category_id || $request->category == 'all-category') {
            //     if ($discountType == 'flat') {
            //         $product->discount = $discountAmount;
            //     } elseif ($discountType == 'percentage') {
            //         $product->discount = ($product->price * $discountAmount) / 100;
            //     }
            //     $product->save();
            // }
        }

        if (!$category) {
            return redirect()->back()->with('error', 'Invalid category selected.');
        }
        $discount = new FlatDiscount();
        $discount->category_id = $request->category;
        $discount->discount_amount = $request->discount_amount;
        $discount->discount_type = $request->discount_type;
        $discount->save();
        return redirect()->route('admin.discount.flat')->with('success', 'Flat discount created successfully.');
    }

    public function discountBatch()
    {
        // Logic for displaying batch discounts
        return view('admin-views.discount-manage.batch.index');
    }

    public function discountBatchCreate()
    {
        // Logic for creating a batch discount
        return view('admin-views.discount-manage.batch.create');
    }

    public function discountBatchStore(Request $request)
    {
        // Logic for storing a batch discount
        // Validate and save the discount data
        return redirect()->route('admin.discount.batch')->with('success', 'Batch discount created successfully.');
    }
}
