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
                    </div>
                    <div class="card-footer text-muted">
                        -0-
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($comments->isEmpty())
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">There is no comment.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @else
        @foreach ($comments as $comment)
            <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Content: {!! $comment->content !!}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endforeach
    @endif

    <div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card text-left">
                <div class="card-header">
                    <h4>Comment</h4>
                </div>
                <div class="card-body">
                        {!! Form::model($comment, ['action' => 'CommentsController@newComment']) !!}

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

                        {!! Form::hidden('post_id', $post->id) !!}
                        {!! Form::hidden('post_type', 'App\Post') !!}

                        <div class="form-group">
                            {!! Form::label('content', 'Content', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::textarea('content', '', ['class' =>'form-control', 'rows' => '5']) !!}
                            <span class="bmd-help">Feel free ask us any question.</span>
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
