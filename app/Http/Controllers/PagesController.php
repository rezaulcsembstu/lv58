<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

    public function welcome()
    {
        return view('custom.welcome');
    }

    public function test()
    {
        phpinfo();

    }
    
}
