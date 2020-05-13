@extends('master')
@section('title', 'Contact')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="content">
                <div class="title">ContactCrop Page</div>
                <div class="quote">Our ContactCrop page!!!</div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-10 offset-1">
            {!! Form::open(['url' => 'croppedImage', 'files' => true]) !!}
            {!! Form::hidden('croppedImage', '', ['id' => 'croppedImage']) !!}
            <span class="btn btn-info btn-file">
                Choose an image
                {!! Form::file('uploadedImage', ['id' => 'uploadedImage']) !!}
            </span>
            {!! Form::submit('Upload', ['class' => 'btn btn-info ladda-button', 'data-style' => 'expand-left', 'data-size'=>'xs', 'data-color'=>'purple']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-10 offset-1">
            <button id="cropImage" type="button" class="btn btn-primary d-none">Crop Image</button>
        </div>
    </div>
    <div class="row mt-3">
        <div id="getCroppedCanvas" class="col-10 offset-1">
        </div>
    </div>
    <div class="row mt-3">
        <!-- Wrap the image or canvas element with a block element (container) -->
        <div class="col-10 offset-1">
            <img class="img-fluid img-thumbnail" id="image" src="">
        </div>
    </div>
</div>


@endsection