<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
        public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function products()
    {
        return view('products');
    }

    public function services()
    {
        return view('services');
    }

    public function welcome()
    {
        return view('custom.welcome');
    }
}
