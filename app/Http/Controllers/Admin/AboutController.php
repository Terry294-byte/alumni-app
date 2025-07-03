<?php

// app/Http/Controllers/Admin/AboutController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.members.index'); // Adjust the view path as needed
    }
}
