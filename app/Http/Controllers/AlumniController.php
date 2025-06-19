<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::all();
        return view('alumni.index', compact('alumni'));
    }

    public function create()
    {
        return view('alumni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:alumni',
            'phone' => 'nullable',
            'course' => 'required',
            'graduation_year' => 'required|digits:4|integer',
        ]);

        Alumni::create($request->all());

        return redirect()->route('alumni.index')->with('success', 'Alumni added successfully!');
    }

    public function destroy($id)
    {
        Alumni::findOrFail($id)->delete();
        return redirect()->route('alumni.index')->with('success', 'Alumni deleted successfully!');
    }
}
