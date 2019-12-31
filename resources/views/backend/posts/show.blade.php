@extends('master')
@section('title', 'View a post')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h3>Title: {!! $post->title !!}</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Content: {!! $post->content !!}</h5>
                        <p class="card-text">Categories:
                            @foreach ($selectedCategories as $selectedCategory)
                                {!! $selectedCategory !!},
                            @endforeach
                        </p>
                        {!! link_to_action('Admin\PostsController@edit', 'edit', $post, ['class' => 'btn btn-primary float-left']) !!}
                        {!! Form::model($post, ['action' => ['Admin\PostsController@destroy', $post], 'class' => 'float-left']) !!}

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
</div>
@endsection
