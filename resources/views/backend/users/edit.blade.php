@extends('master')
@section('title','Edit a user')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card text-left">
                <div class="card-header">
                    <h4>Edit a user</h4>
                </div>
                <div class="card-body">
                        {!! Form::model($user, ['action' => ['Admin\UsersController@update', $user], 'method' => 'put' ]) !!}

                        {!! Form::token() !!}

                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $error }}</strong>
                            </div>
                        @endforeach

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <strong>{{ session('status') }}</strong>
                            </div>
                        @endif

                        <div class="form-group">
                            {!! Form::label('name', 'Name', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::text('name', $user->name, ['class' =>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::email('email', $user->email, ['class' =>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('role[]', 'Choose Roles', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::select('role[]', $roles, $selectedRoles, ['class' =>'form-control', 'multiple' => true]) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('password', 'Password', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::password('password', ['class' =>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password_confirmation', 'Password Confirmation', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::password('password_confirmation', ['class' =>'form-control']) !!}
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
