<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\ProductImage;

class GuestController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('homepage', compact('categories', 'subcategories'));
    }

    public function show($id)
    {
        $subcategories = Subcategory::all();
        $subcategory = Subcategory::find($id);
        $products = Product::where('subcategory_id', $id)->get();

        foreach ($products as $product) {
            $productThumbnail = ProductImage::all();
        }

        $data = [
            'products' => $products,
            'productThumbnail' => $productThumbnail,
            'subcategory' => $subcategory,
            'subcategories' => $subcategories,
        ];

        return view('guest.product', compact('data'));
    }
}
