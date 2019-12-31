@extends('master')
@section('title','Posts')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card text-left">
                <div class="card-header">
                    <h4>Create a new post</h4>
                </div>
                <div class="card-body">
                        {!! Form::model($post, ['action' => 'Admin\PostsController@store']) !!}

                        {!! Form::token() !!}

                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" post="alert">
                                <strong>{{ $error }}</strong>
                            </div>
                        @endforeach

                        @if (session('status'))
                            <div class="alert alert-success" post="alert">
                                <strong>{{ session('status') }}</strong>
                            </div>
                        @endif

                        <div class="form-group">
                            {!! Form::label('title', 'Title', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::text('title', '', ['class' =>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('content', 'Content', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::text('content', '', ['class' =>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('categories[]', 'Choose Category', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::select('categories[]', $categories, null, ['class' =>'form-control', 'multiple' => true]) !!}
                        </div>

                         {!! Form::reset('reset', [ 'class' => 'btn btn-danger'] ) !!}
                         {!! Form::submit('submit', [ 'class' => 'btn btn-primary btn-raised'] ) !!}
                        {!! Form::close() !!}

                </div>
                <div class="card-footer text-muted">
                    -0-
                </div>
                </div>

        </div>
    </div>
</div>
@endsection
