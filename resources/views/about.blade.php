@extends('master')
@section('title', 'About')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="title">About Page</div>
            <div class="quote">Our About page!!!</div>
        </div>
    </div>
    <div class="row">
        <div class="col-10 offset-1">
            <div id="files" class="files">
                <div id="testimage">
                    <img class="img-fluid img-thumbnail" src="/images/testimage.png" alt="test image">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-10 offset-1">
            <div id="progress" class="progress" style="display:none;">
                <div class="progress-bar progress-bar-success"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-1">
            <div class="form-group">
                <label for="fileupload">Upload an image</label>
                <input type="file" class="upload btn btn-info form-control-file" name="files[]" id="fileupload"
                    placeholder="" aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Choose image file</small>
            </div>
        </div>
    </div>
</div>

@endsection