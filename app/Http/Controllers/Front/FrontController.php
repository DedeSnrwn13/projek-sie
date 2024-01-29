<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $heroBanner = Banner::where('type', 'hero')->first();
        $footerBanner = Banner::where('type', 'footer')->first();

        return view('welcome', compact('heroBanner', 'footerBanner'));
    }

    public function destination()
    {
        return view('destination');
    }

    public function hotel()
    {
        return view('hotel');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }
}
