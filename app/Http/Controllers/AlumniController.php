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
    //store

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:alumni',
            'phone' => 'nullable',
            'course' => 'required',
            'graduation_year' => 'required|digits:4|integer',
        ]);
        // Create a new alumni record

        Alumni::create($request->all());

        return redirect()->route('alumni.index')->with('success', 'Alumni added successfully!');
    }
    //edit alumni
    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('alumni.edit', compact('alumni'));
    }
    // Update alumni
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:alumni,email,' . $id,
            'phone' => 'nullable',
            'course' => 'required',
            'graduation_year' => 'required|digits:4|integer',
        ]);

        $alumni = Alumni::findOrFail($id);
        $alumni->update($request->all());

        return redirect()->route('alumni.index')->with('success', 'Alumni updated successfully!');
    }
    //destroy alumni

    public function destroy($id)
    {
        Alumni::findOrFail($id)->delete();
        return redirect()->route('alumni.index')->with('success', 'Alumni deleted successfully!');
    }
}
