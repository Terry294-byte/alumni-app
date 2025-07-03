<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Member;

class AboutController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('frontend.about', compact('members'));
    }
}
