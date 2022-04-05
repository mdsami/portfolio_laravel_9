<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function resume()
    {
        return view('frontend.resume');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function project()
    {
        return view('frontend.project');
    }

    public function blog()
    {
        return view('frontend.blog');
    }


}
