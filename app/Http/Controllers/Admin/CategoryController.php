<?php

namespace App\Http\Controllers\Admin;

use App\CPU\Helpers;
use App\CPU\ImageManager;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query_param = [];
        $search = $request['search'];
        if ($request->has('search')) {
            $key = explode(' ', $request['search']);
            $categories = Category::where(function ($q) use ($key) {
                foreach ($key as $value) {
                    $q->orWhere('name', 'like', "%{$value}%");
                }
            });
            $query_param = ['search' => $request['search']];
        }

        $categories = Category::orderBy('priority', 'asc')
    ->paginate(Helpers::pagination_limit())
    ->appends($query_param);
        return view('admin-views.category.view', compact('categories', 'search'));
    }

    public function store(Request $request)
{

        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'priority' => 'required'
        ], [
            'name.required' => 'Category name is required!',
            'image.required' => 'Category image is required!',
            'priority.required' => 'Category priority is required!',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->icon = ImageManager::upload('category/', 'png', $request->file('image'));
        $category->priority = $request->priority;
        $category->save();

        Toastr::success('Category added successfully!');
        return back();
    }



    public function update(Request $request)
    {

        $category = Category::find($request->id);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        if ($request->icon) {
            $category->icon = ImageManager::update('category/', $category->icon, 'png', $request->file('icon'));
        }
        $category->priority = $request->priority;
        $category->save();

        Toastr::success('Category updated successfully!');
        return back();
    }

    public function delete(Request $request)
    {
        $category = Category::find($request->id);

        if ($category) {

            $fullPath = 'category/' . $category->icon;
            ImageManager::delete($fullPath);
            $category->delete();
        }

        return response()->json(['success' => true]);
    }

    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::where('position', 0)->orderBy('id', 'desc')->get();
            return response()->json($data);
        }
    }

    public function status(Request $request)
    {
        $category = Category::find($request->id);
        $category->home_status = $request->home_status;
        $category->save();
        // Toastr::success('Service status updated!');
        // return back();
        return response()->json([
            'success' => 1,
        ], 200);
    }
}
