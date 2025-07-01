<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::latest()->get();
        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members,email',
            'position' => 'nullable|string',
            'photo' => 'nullable|image|max:2048'
        ]);

        $path = null;
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('members', 'public');
        }

        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'position' => $request->position,
            'photo' => $path,
        ]);

        return redirect()->route('admin.members.index')->with('success', 'Member added!');
    }

    public function destroy(Member $member)
    {
        if ($member->photo) {
            Storage::disk('public')->delete($member->photo);
        }

        $member->delete();
        return back()->with('success', 'Member removed!');
    }
}