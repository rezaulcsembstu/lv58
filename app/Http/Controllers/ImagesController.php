<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use App\Http\Requests\ImageFormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('custom.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ImageFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageFormRequest $request)
    {
        //

        if ($request->hasFile('image')) {
            $name = time() . $request->image->getClientOriginalName();
            $imagePath = storage_path('app/public/') . $request->image->storeAs('images', $name);
            Image::make($imagePath)->resize(1000, 250)->greyscale()->save();
            return redirect(action('ImagesController@create'))->with([
                'status' => 'Your image has been uploaded successfully',
                'name' => $name
            ]);
        }
    }

    public function storeImages()
    {

        $files = Input::file('files');

        $json = array(
            'files' => array()
        );

        foreach ($files as $file) {
            $destination = 'images';
            $size = $file->getSize();
            $filename = 'testimage';
            $extension = 'png';
            $fullName = $filename . '.' . $extension;
            $pathToFile = $destination . '/' . $fullName;
            $upload_success = Image::make($file)->encode('png')->save($destination . '/' . $fullName);

            if ($upload_success) {
                $json['files'][] = array(
                    'name' => $filename,
                    'size' => $size,
                    'url' => $pathToFile,
                    'message' => 'Uploaded successfully'
                );
                return Response::json($json);
            } else {
                $json['files'][] = array(
                    'message' => 'error uploading images',
                );
                return Response::json($json, 202);
            }
        }
    }

    public function storeCroppedImage()
    {
        $files = Input::all();

        if ($files['croppedImage'] != "") {

            $file = $files['croppedImage'];

            $destination = 'images';
            $filename = 'testimage';
            $extension = 'png';
            $fullName = $filename . '.' . $extension;

            $image = Image::make($file)->encode('png')->save($destination . '/' . $fullName);

            alert()->success('Image has been cropped successfully!', 'Success!')->autoclose(3000);

            return redirect('/contactCrop');
        } else if (isset($files['uploadedImage'])) {

            $file = $files['uploadedImage'];
            $destination = 'images';
            $filename = 'testimage';
            $extension = 'png';
            $fullName = $filename . '.' . $extension;
            $image = Image::make($file)->encode('png')->save($destination . '/' . $fullName);

            alert()->success('Image has been uploaded successfully!', 'Success!')->autoclose(3000);

            return redirect('/contactCrop');
        } else {
            alert()->error('There is an error!', 'Error!')->autoclose(3000);

            return redirect('/contactCrop');
        }
    }
}
