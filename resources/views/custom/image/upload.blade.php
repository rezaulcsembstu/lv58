@extends('master')
@section('title', 'Image Upload')

@section('content')
    <div class="container">
        <div class="row banner">

            <div class="col-md-12 mt-5">

                <div class="card w-75">
                <div class="card-body">
                    {!! Form::open(['action' => 'ImagesController@imageUpload', 'files' => true]) !!}
                    <div class="form-group">
                      {!! Form::label('title', 'Choose an image:', ['class' => 'bmd-label-floating']) !!}
                      {!! Form::file('image', ['class' => 'form-control-file']) !!}
                      <small id="fileHelpId" class="form-text text-muted">upload image to make a cover</small>
                    </div>
                    {!! Form::submit('upload', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}

                </div>
                </div>

            </div>

        </div>
    </div>

@endsection




