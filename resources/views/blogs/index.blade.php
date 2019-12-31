@extends('master')
@section('title', 'Blog')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h3>Posts</h3>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <strong>{!! session('status') !!}</strong>
                            </div>
                        @endif
                    </div>
                    @if ($posts->isEmpty())
                        <h5 class="card-title">There is no post.</h5>
                    @else
                        @foreach ($posts as $post)
                            <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="card">
                                    <div  class="card-header"><a href="{!! action('BlogsController@show', ['slug' => $post->slug]) !!}">{!! $post->title !!}</a></div>
                                    <div class="card-body">
                                        <h5 class="card-title"> {!! mb_substr($post->content, 0, 500) !!}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
