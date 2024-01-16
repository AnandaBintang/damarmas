<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Subcategory;
use App\Models\Category;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $subcategories = Subcategory::paginate(10);

        return view('subcategory.index', compact('categories', 'subcategories'));
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
            'name' => 'required|unique:subcategories|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,svg',
            'category' => 'required',
        ]);

        $subcategory = new Subcategory();
        $subcategory->name = $request->name;

        $imageName = time().'.'.$request->thumbnail->extension();
        $request->thumbnail->move(public_path('storage/upload/subcategory'), $imageName);
        $subcategory->image = $imageName;

        $subcategory->category_id = $request->category;

        $subcategory->save();

        return redirect()->route('subcategory.index')
            ->with('status', 'Sub Kategori baru berhasil dibuat!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $subcategory = Subcategory::findOrFail($request->subcategory);
        $categories = Category::all();

        // Return view with category data
        return view('subcategory.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
        ]);

        $subcategory = Subcategory::findOrFail($request->subcategory);

        $subcategory->name = $request->name;

        if ($request->thumbnail) {
            // Delete old image
            $oldImage = $subcategory->image;
            unlink(public_path('storage/upload/subcategory/'.$oldImage));

            // Upload new image
            $imageName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('storage/upload/subcategory'), $imageName);
            $subcategory->image = $imageName;
        }

        $subcategory->category_id = $request->category;

        $subcategory->save();

        return redirect()->route('subcategory.index')
            ->with('status', 'Sub Kategori berhasil diubah!.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory): RedirectResponse
    {
        // destroy subcategory
        $subcategory->delete();

        return redirect()->route('subcategory.index')
            ->with('status', 'Sub Katagori berhasil dihapus!.');
    }
}
