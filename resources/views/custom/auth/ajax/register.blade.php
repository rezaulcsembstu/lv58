@extends('master')
@section('title','Register')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card text-left">
                <div class="card-header">
                    Register a new user through AJAX
                </div>
                <div class="card-body">
                    <form id="ajaxRegistrationForm" method="POST" action="{{ url('users/custom/auth/ajax/register') }}" data-parsley-validate>

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="userName" class="bmd-label-floating">Name</label>
                            <input type="text" class="form-control" id="userName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="userEmail" class="bmd-label-floating">Email address</label>
                            <input type="email" class="form-control" id="userEmail" name="email" required>
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="form-group">
                            <label for="userPassword" class="bmd-label-floating">Password</label>
                            <input type="password" class="form-control" id="userPassword" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="userPassword" class="bmd-label-floating">Confirm Password</label>
                            <input type="password" class="form-control" id="userConfirmPassword" name="password_confirmation" data-parsley-equalto="#userPassword" required>
                        </div>

                        <button type="reset" class="btn btn-warning"><i class="fas fa-redo"></i> Reset</button>
                        <button type="submit" class="ladda-button" data-style="expand-right" data-color="purple" data-size="xs" data-spinner-color="mint" data-spinner-lines="22"><i class="fas fa-check"></i> Submit</button>
                        <hr>
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
