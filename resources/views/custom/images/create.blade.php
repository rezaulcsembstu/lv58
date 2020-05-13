@extends('master')
@section('title', 'Image Upload')

@section('content')
    <div class="container">
        <div class="row banner">

            <div class="col-12 mt-5">

                <div class="card w-75">
                    <div class="card-header">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="card-body">
                        @if (session('name'))
                        <img src="{!! asset('storage/images/' . session('name')) !!}" class="img-fluid img-thumbnail" width="100%"
                            height="250px">
                        @endif
                        {!! Form::open(['url' => 'upload', 'files' => true]) !!}

                            @component('shared.error')
                            @endcomponent

                            @component('shared.session')
                            @endcomponent
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




