@extends('master')
@section('title', 'View a user')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h3>Name: {!! $user->name !!}</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Email: {!! $user->email !!}</h5>
                        {!! link_to_action('Admin\UsersController@edit', 'edit', $user, ['class' => 'btn btn-primary float-left']) !!}
                        {!! Form::model($user, ['action' => ['Admin\UsersController@destroy', $user], 'class' => 'float-left']) !!}

                        {!! Form::token() !!}
                        <div class="form-group">
                            {!! Form::submit('delete', [ 'class' => 'btn btn-warning'] ) !!}
                        </div>
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
