<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    //
    public function imageUpload()
    {
        return view('custom.image.upload');
    }

    public function imageStore()
    {
        return view('custom.image.upload');
    }
}
