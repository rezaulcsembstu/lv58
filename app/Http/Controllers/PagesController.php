<?php

namespace App\Http\Controllers;

use Facebook\Facebook;
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
        $fb = new Facebook([
            'app_id' => env('FACEBOOK_ID'),
            'app_secret' => env('FACEBOOK_SECRET'),
            'default_graph_version' => 'v5.0',
        ]);
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
