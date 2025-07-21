<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return response($categories, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //here the Category create view is returned.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100']
        ]);

        $category = Category::query()->create($data);
        return response($category, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response($category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Here is where the Edit view is returned.
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100']
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        return response($category, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response(['Category'=> $category, 'Item successful Deleted.'], 200);
    }
}
