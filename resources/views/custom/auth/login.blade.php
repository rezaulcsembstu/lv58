@extends('master')
@section('title','Login')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card text-left">
                <div class="card-header">
                    Login a user
                </div>
                <div class="card-body">
                    <form method="POST">
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="userEmail" class="bmd-label-floating">Email address</label>
                            <input type="email" class="form-control" id="userEmail" name="email" value="{{ old('email') }}">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>

                        <div class="form-group">
                            <label for="userPassword" class="bmd-label-floating">Password</label>
                            <input type="password" class="form-control" id="userPassword" name="password">
                        </div>

                        <div class="checkbox">
                            <label>
                            <input type="checkbox" name="remember"> Remember Me?
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-raised">Login</button>
                        <hr>
                        <a href="{{ url('/auth/redirect/github') }}" class="btn btn-outline-info"><i class="fab fa-github"></i> Github</a>
                        <a href="{{ url('/auth/redirect/linkedin') }}" class="btn btn-outline-info"><i class="fab fa-linkedin"></i> Linkedin</a>
                        <a href="{{ url('/auth/redirect/google') }}" class="btn btn-outline-info"><i class="fab fa-google"></i> Google</a>
                        </form>
                </div>
                <div class="card-footer text-muted">
                    -0-
                </div>
                </div>
        </div>
    </div>
</div>
@endsection
