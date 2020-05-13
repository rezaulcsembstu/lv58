@extends('master')
@section('title', 'View all tickets')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h3>Tickets</h3>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <strong>{!! session('status') !!}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        @if ($tickets->isEmpty())
                            <h5 class="card-title">There is no ticket.</h5>
                        @else
                            <h5 class="card-title">All tickets here</h5>
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $ticket)
                                    <tr>
                                    <th scope="row">{!! $ticket->id !!}</th>
                                    <td>
                                        <a href="{!! action('TicketsController@show', ['slug' => $ticket->slug]) !!}">{!! $ticket->title !!}</a>
                                    </td>
                                    <td>{!! $ticket->content !!}</td>
                                    <td>{!! $ticket->status ? 'Pending' : 'Answered' !!}</td>
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
