<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    /**
     * All Category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories')->with('categories', $categories);
    }

    /**
     * Store Category
     * @param StoreCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCategoryRequest $request)
    {
        $params = $request->validated();
        Category::create($params);
        return back();
    }

    /**
     * Update Category
     * @param StoreCategoryRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreCategoryRequest $request, $id)
    {
        $params = $request->validated();
        $category = Category::findOrFail($id);
        dd($params);
        $category->update($params);
        return back();
    }

    public function details($id)
    {
        $category = Category::findOrFail($id);
        return view('detailsCategory')->with('category', $category);
    }

    /**
     * Delete Category
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return back();
    }
}
