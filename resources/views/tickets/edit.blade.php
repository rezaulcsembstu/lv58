@extends('master')
@section('title','Edit a ticket')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card text-left">
                <div class="card-header">
                    <h4>Edit a ticket</h4>
                </div>
                <div class="card-body">
                        {!! Form::model($ticket, ['action' => ['TicketsController@edit', $ticket->slug] ]) !!}

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
                            {!! Form::label('title', 'Title', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::text('title', $ticket->title, ['class' =>'form-control']) !!}
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>

                        <div class="form-group">
                            {!! Form::label('content', 'Content', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::textarea('content', $ticket->content, ['class' =>'form-control', 'rows' => '5']) !!}
                            <span class="bmd-help">Feel free ask us any question.</span>
                        </div>

                        <div class="radio">
                            <label>
                                {!! Form::radio('status', 0, $ticket->status == 0 ? true : false) !!} Close this ticket
                            </label>
                            <label>
                                {!! Form::radio('status', 1, $ticket->status == 1 ? true : false) !!} Open this ticket
                            </label>

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
