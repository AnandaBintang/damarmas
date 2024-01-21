<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::latest()->paginate(10);

        return view('banner.index', compact('banners'));
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
            'title' => 'required|string',
            'link' => 'nullable|string',
            'image' => 'required|image',
        ]);

        $banner = new Banner();
        $banner->title = $request->title;
        $banner->link = $request->link;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/upload/banner'), $imageName);
            $banner->image = $imageName;
        }

        $banner->save();

        return redirect()->back()->with('status', 'Banner baru berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $banner = Banner::findOrFail($request->banner);

        return view('banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string',
            'link' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        $banner = Banner::findOrFail($request->banner);
        $banner->title = $request->title;
        $banner->link = $request->link;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($banner->image) {
                unlink(public_path('storage/upload/banner/' . $banner->image));
            }

            // Upload new image
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/upload/banner'), $imageName);
            $banner->image = $imageName;
        }

        $banner->save();

        return redirect()->route('banner.index')->with('status', 'Banner berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner): RedirectResponse
    {
        // Delete image
        if ($banner->image) {
            unlink(public_path('storage/upload/banner/' . $banner->image));
        }

        // Delete from database
        $banner->delete();

        return redirect()->back()->with('status', 'Banner berhasil dihapus!');
    }
}
