<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\About;
use App\Models\Testimonial;

class GuestController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $products = Product::orderBy('created_at', 'desc')->take(4)->get();
        $productThumbnail = null;
        $about = About::first();
        $testimonial = Testimonial::all();

        foreach ($products as $product) {
            $productThumbnail = ProductImage::all();
        }

        $data = [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'products' => $products,
            'productThumbnail' => $productThumbnail,
            'about' => $about,
            'testimonials' => $testimonial,
        ];

        return view('homepage', compact('data'));
    }

    public function show($id)
    {
        $subcategories = Subcategory::all();
        $subcategory = Subcategory::find($id);
        $products = Product::where('subcategory_id', $id)->get();
        $productThumbnail = null;

        foreach ($products as $product) {
            $productThumbnail = ProductImage::all();
        }

        $data = [
            'subcategory' => $subcategory,
            'subcategories' => $subcategories,
            'products' => $products,
            'productThumbnail' => $productThumbnail,
        ];

        return view('guest.product', compact('data'));
    }

    public function showProductDetail($id)
    {
        $product = Product::find($id);
        $productImages = ProductImage::where('product_id', $id)->get();

        $data = [
            'product' => $product,
            'productImages' => $productImages,
        ];

        return view('guest.product-detail', compact('data'));
    }
}
