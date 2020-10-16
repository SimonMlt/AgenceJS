<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories')->with('categories', $categories);
    }

    public function store(StoreCategoryRequest $request)
    {
        $params = $request->validated();
        Category::create($params);
        return back();
    }

    public function details($id)
    {
        $category = Category::findOrFail($id);
        return view('detailsCategory')->with('category', $category);
    }

    public function remove($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return back();
    }
}
