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

    public function contactCrop()
    {
        return view('contactCrop');
    }

    public function products()
    {
        alert()->success('Arrived!', 'Product Page!')->persistent('Click to close!');

        return view('products');
    }

    public function welcome()
    {
        $quotesRaw = file_get_contents(storage_path('app/public/asset/') . 'quotes.json');
        $quotesJson = json_decode($quotesRaw, true);
        $randomQuote = $quotesJson['quotes'][rand(0, count($quotesJson['quotes']))];
        return view('custom.welcome')->with('quote', $randomQuote);
    }

    public function test()
    {
        phpinfo();
    }

}
