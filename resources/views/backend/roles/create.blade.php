@extends('master')
@section('title','Roles')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card text-left">
                <div class="card-header">
                    <h4>Create a new role</h4>
                </div>
                <div class="card-body">
                        {!! Form::model($role, ['action' => 'Admin\RolesController@store']) !!}

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
                            {!! Form::text('name', '', ['class' =>'form-control']) !!}
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
