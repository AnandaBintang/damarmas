<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('id', 'asc')->get();

        return view('testimonial.index', compact('testimonials'));
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
    public function store(StoreTestimonialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $testimonial = Testimonial::find($request->testimonial);

        $testimonial->name = $request->name;
        $testimonial->testimonial = $request->content;

        // Handle image upload, delete old image, then rename image with id and store to public/upload/product
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $testimonial->id . '.' . $image->getClientOriginalExtension();

            // Delete old image, if old image is "default.webp" then it won't be deleted
            if ($testimonial->image != 'default.webp') {
                Storage::delete('public/upload/testimonial/' . $testimonial->image);
            }

            // Store the image with the generated name
            $image->storeAs('public/upload/testimonial', $imageName);

            // Save image information to the database
            $testimonial->image = $imageName;
        }

        $testimonial->save();

        return redirect()->route('testimonial.index')->with('status', 'Testimonial berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
