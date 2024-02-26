<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    function index()
    {
    $wpisy = Blog::all();
    return view ('blog.index',[
        'wpisy' => $wpisy 
    ]
    );
}
}