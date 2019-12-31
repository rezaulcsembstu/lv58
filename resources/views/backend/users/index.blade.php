@extends('master')
@section('title', 'All users')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h3>Users</h3>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <strong>{!! session('status') !!}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        @if ($users->isEmpty())
                            <h5 class="card-title">There is no user.</h5>
                        @else
                            <h5 class="card-title">All users here</h5>
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                    <th scope="row">{!! $user->id !!}</th>
                                    <td>
                                        <a href="{!! action('Admin\UsersController@show', ['user' => $user]) !!}">{!! $user->name !!}</a>
                                    </td>
                                    <td>{!! $user->email !!}</td>
                                    <td>{!! $user->created_at !!}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        @endif
                    </div>
                    <div class="card-footer text-muted">
                        -0-
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
