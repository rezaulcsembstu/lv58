@extends('master')
@section('title', 'View all categories')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h3>Categories</h3>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <strong>{!! session('status') !!}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        @if ($categories->isEmpty())
                            <h5 class="card-title">There is no category.</h5>
                        @else
                            <h5 class="card-title">All categories here</h5>
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                    <th scope="row">{!! $category->id !!}</th>
                                    <td>
                                        {!! $category->name !!}
                                    </td>
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
