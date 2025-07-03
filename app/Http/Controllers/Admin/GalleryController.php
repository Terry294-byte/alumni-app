<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the gallery images.
     */
    public function index()
    {
        $images = Gallery::latest()->get();
        return view('admin.gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new gallery image.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly uploaded image in storage and save record.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'caption' => 'nullable|string|max:255',
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'image' => $path,
            'caption' => $request->caption,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Image uploaded successfully.');
    }

    /**
     * Remove the specified image from storage and delete record.
     */
    public function destroy($id)
    {
        $image = Gallery::findOrFail($id);

        if (Storage::disk('public')->exists($image->image)) {
            Storage::disk('public')->delete($image->image);
        }

        $image->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Image deleted successfully.');
    }

    /**
     * Show the form for editing the specified image.
     */
    public function edit($id)
    {
        $image = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('image'));
    }

    /**
     * Update the specified image in storage.
     */
    public function update(Request $request, $id)
    {
        $image = Gallery::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|max:2048',
            'caption' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if (Storage::disk('public')->exists($image->image)) {
                Storage::disk('public')->delete($image->image);
            }
            // Store new image
            $path = $request->file('image')->store('gallery', 'public');
            $image->image = $path;
        }

        $image->caption = $request->caption;
        $image->save();

        return redirect()->route('admin.gallery.index')->with('success', 'Image updated successfully.');
    }
}
