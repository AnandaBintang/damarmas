<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index')->with('status', 'Kategori baru berhasil ditambahkan!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {

        $category = Category::findOrFail($request->category);

        // Return view with category data
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): RedirectResponse
    {
        $category = Category::findOrFail($request->category);

        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index')->with('status', 'Kategori berhasil diubah!.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        // Delete category from database
        $category->delete();

        // Redirect to category.index page
        return redirect()->route('category.index')->with('status', 'Kategori berhasil dihapus!.');
    }
}
