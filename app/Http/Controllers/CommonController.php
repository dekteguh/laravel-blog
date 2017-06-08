<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function about()
    {
    	return view('blog.about');
    }

    public function contact()
    {
    	return view('blog.contact');
    }
}
