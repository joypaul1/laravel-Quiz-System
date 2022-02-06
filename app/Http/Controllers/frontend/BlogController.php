<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('frontend.blog');
    }

    public function blogDetails()
    {
        return view('frontend.blog_details');
    }
}
