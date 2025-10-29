<?php

namespace App\Http\Controllers\Admin;

use App\CPU\Helpers;
use App\Http\Controllers\Controller;
use App\Model\{Category,Translation};
use App\Models\{SubCategory, SubSubCategory};
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubSubCategoryController extends Controller
{
    public function index(Request $request)
    {
        $query_param = [];
        $search = $request['search'];
        if($request->has('search'))
        {
            $key = explode(' ', $request['search']);
            $all_sub_sub_categories = SubSubCategory::where(function ($q) use ($key) {
                foreach ($key as $value) {
                    $q->orWhere('name', 'like', "%{$value}%");
                }
            });
            $query_param = ['search' => $request['search']];
        }else{
            $all_sub_sub_categories=SubSubCategory::all();
        }
        $all_sub_sub_categories = SubSubCategory::latest()->paginate(Helpers::pagination_limit())->appends($query_param);



        return view('admin-views.sub-sub-category.view',compact('all_sub_sub_categories','search'));
    }

    public function store(Request $request)
    {
        $category = new SubSubCategory();
        $category->category_id = $request->category_id;
        $category->sub_category_id = $request->subcategory_id;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        $category->save();

        Toastr::success('Sub Sub Category added successfully!');
       return redirect()->back();

    }


    public function update(Request $request)
    {

        $category = SubSubCategory::find($request->id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->category_id = $request->category_id;
        $category->sub_category_id = $request->subcategory_id;
        $category->save();
        Toastr::success('Sub Sub Category updated successfully!');
        return back();


    }
    public function delete(Request $request)
    {

        SubSubCategory::destroy($request->id);
        return response()->json();
    }
    public function fetch(Request $request){
        if($request->ajax())
        {
            $data = Category::where('position',2)->orderBy('id','desc')->get();
            return response()->json($data);

        }
    }

    // public function getSubCategory($category_id)
    // {
    //     $subcategories = SubCategory::where('category_id', $category_id)->get();
    //     return response()->json($subcategories);
    // }
public function getSubCategory(Request $request)
{
    $data = SubCategory::where('category_id', $request->id)->get();

    $output = '';
    foreach ($data as $row) {
        $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
    }

    return response($output);
}

public function getCategoryId(Request $request)
{
    $data = Category::where('id', $request->id)->first();
    return response()->json($data);
}

}
