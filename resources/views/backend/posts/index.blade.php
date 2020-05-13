@extends('master')
@section('title', 'View all posts')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h3>Posts</h3>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <strong>{!! session('status') !!}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        @if ($posts->isEmpty())
                            <h5 class="card-title">There is no post.</h5>
                        @else
                            <h5 class="card-title">All posts here</h5>
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Updated at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                    <th scope="row">{!! $post->id !!}</th>
                                    <td>
                                        <a href="{!! action('Admin\PostsController@show', ['post' => $post]) !!}">{!! $post->title !!}</a>
                                    </td>
                                    <td>
                                        {!! $post->content !!}
                                    </td>
                                    <td>
                                        {!! $post->slug !!}
                                    </td>
                                    <td>
                                        {!! $post->created_at !!}
                                    </td>
                                    <td>
                                        {!! $post->updated_at !!}
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
