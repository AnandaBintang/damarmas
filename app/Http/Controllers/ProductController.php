<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\ProductImage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        $products = Product::paginate(10);

        if ($products->isEmpty()) {
            return view('product.index', compact('subcategories', 'products'));
        }

        $productThumbnail = [];

        foreach ($products as $product) {
            $productThumbnail[$product->id] = ProductImage::where('product_id', $product->id)->first();
        }

        return view('product.index', compact('subcategories', 'products', 'productThumbnail'));
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
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = new Product();

        // Set basic product details
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = (int) $request->price;
        $product->subcategory_id = $request->subcategory;

        $product->save();

        // Handle product images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Generate a unique name for the image
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

                // Store the image with the generated name
                $image->storeAs('public/upload/product', $imageName);

                // Save image information to the database
                ProductImage::create([
                    'image' => $imageName,
                    'product_id' => $product->id,
                ]);
            }
        }

        return redirect()->route('product.index')->with('status', 'Produk baru berhasil dibuat!');
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
        $productImages = ProductImage::where('product_id', $product->id)->get();
        $subcategories = Subcategory::all();

        return view('product._partials.edit-product-form', compact('product', 'productImages', 'subcategories'));
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
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate each image
        ]);

        $product = Product::find($request->product);

        // Update basic product details
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = (int) $request->price;
        $product->subcategory_id = $request->subcategory;

        $product->save();

        // Handle product images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Generate a unique name for the image
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

                // Store the image with the generated name
                $image->storeAs('public/upload/product', $imageName);

                // Save image information to the database
                ProductImage::create([
                    'image' => $imageName,
                    'product_id' => $product->id,
                ]);
            }
        }

        return redirect()->route('product.index')->with('status', 'Produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        // Hapus gambar dari storage
        $productImages = ProductImage::where('product_id', $product->id)->get();

        foreach ($productImages as $image) {
            // Hapus file dari storage
            Storage::delete('public/upload/product/' . $image->image);

            // Hapus data gambar dari table product_images
            $image->delete();
        }

        // Hapus data produk dari table products
        $product->delete();

        return redirect()->route('product.index')->with('status', 'Produk berhasil dihapus!');
    }
}
