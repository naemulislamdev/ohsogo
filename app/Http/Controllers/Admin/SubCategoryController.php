<?php

namespace App\Http\Controllers\Admin;

use App\CPU\Helpers;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Translation;
use App\Models\SubCategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function index(Request $request)
    {
        $query_param = [];
        $search = $request['search'];
        if ($request->has('search')) {
            $key = explode(' ', $request['search']);
            $categories = SubCategory::where(function ($q) use ($key) {
                foreach ($key as $value) {
                    $q->orWhere('name', 'like', "%{$value}%");
                }
            });
            $query_param = ['search' => $request['search']];
        } else {

        }
        $subCategories = SubCategory::latest()->paginate(10)->appends(request()->query());
       
        return view('admin-views.sub-category.view', compact('subCategories', 'search'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        SubCategory::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'SubCategory added successfully!'
        ]);
    }
    public function update(Request $request)
    {

        $subCategory = SubCategory::find($request->id);
        $subCategory->category_id = $request->category_id;
        $subCategory->name = $request->name;
        $subCategory->slug = Str::slug($request->name);
        $subCategory->save();
        // return response()->json();
        Toastr::success('SubCategory Updated successfully!');
        return back();
    }

    public function delete(Request $request)
    {
        $subCategory = SubCategory::find($request->id);

        if ($subCategory) {
            $subCategory->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Subcategory not found.']);
    }


    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $data = SubCategory::where('position', 1)->orderBy('id', 'desc')->get();
            return response()->json($data);
        }
    }
}
