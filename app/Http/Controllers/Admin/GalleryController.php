<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::latest()->get();
        return view('admin.gallery.index', compact('images'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'caption' => 'nullable|string'
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'image' => $path,
            'caption' => $request->caption,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Image uploaded!');
    }

    public function destroy(Gallery $gallery)
    {
        Storage::disk('public')->delete($gallery->image);
        $gallery->delete();
        return back()->with('success', 'Image deleted.');
    }
}
