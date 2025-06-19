<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class StudentProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function show()
    {
        return view('profile.show');
    }

    public function update(Request $request)
    {
        $user = \App\Models\User::find(Auth::id());

        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'profile_picture' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pics', 'public');
            $user->profile_picture = $path;
        }

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->save();

        return redirect()->route('student.profile.show')->with('success', 'Profile updated successfully!');
    }
}
