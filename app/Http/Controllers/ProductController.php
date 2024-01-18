<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Product;
use App\Models\Subcategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        $products = Product::paginate(10);

        return view('product.index', compact('subcategories', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subcategories = Subcategory::all();

        return view('product._partials.create-product-form', compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'subcategory' => 'required|exists:subcategories,id',
        ]);

        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = (int) $request->price;
        $product->subcategory_id = $request->subcategory;

        $product->save();

        return redirect()->route('product.index')->with('status', 'Produk baru berhasil dibuat!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $product = Product::find($request->product);
        $subcategories = Subcategory::all();

        return view('product._partials.edit-product-form', compact('product', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'subcategory' => 'required|exists:subcategories,id',
        ]);

        $product = Product::find($request->product);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = (int) $request->price;
        $product->subcategory_id = $request->subcategory;

        $product->save();

        return redirect()->route('product.index')->with('status', 'Produk berhasil diperbarui!.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('product.index')->with('status', 'Produk berhasil dihapus!.');
    }
}
