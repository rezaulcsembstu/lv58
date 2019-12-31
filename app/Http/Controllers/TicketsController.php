<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketFormRequest;
use App\Ticket;
use App\Comment;
use Illuminate\Support\Facades\Mail;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tickets = Ticket::all();
        return view('tickets.index')->with('tickets', $tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ticket = new Ticket;
        return view('tickets.create')->with('ticket', $ticket);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\TicketFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketFormRequest $request)
    {
        //
        //return $request->all();

        $slug = uniqid();
        $ticket = new Ticket(
            [
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'slug' =>$slug,
                'user_id' => 1
            ]
            );
        $ticket->save();

        $data = [ 'ticket' => $slug];

        Mail::send('emails.ticket', $data, function ($message) {
            $message->from('rezaul.cse.mbstu@gmail.com', 'Rezaul Islam');
            $message->to('rezaulcsembstu@yahoo.com', 'MD. Rezaul Islam');
            $message->subject('There is a new ticket. DO NOT REPLY');
        });

        return redirect( action('TicketsController@create') )->with('status', 'Your ticket has been created! Its unique id is: '. $slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $comments = $ticket->comments()->get();
        $comment = new Comment;
        return view('tickets.show')->with([
            'ticket' => $ticket,
            'comments' => $comments,
            'comment' => $comment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        return view('tickets.edit')->with('ticket', $ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request\TicketFormRequest  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(TicketFormRequest $request, $slug)
    {
        //
        //return $request->all();
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->title = $request->get('title');
        $ticket->content = $request->get('content');

        if ($request->get('status') == 0) {
            $ticket->status = 0;
        } else {
            $ticket->status = 1;
        }

        $ticket->save();

        return redirect( action('TicketsController@edit', $slug) )->with('status', 'The ticket ' . $slug . ' has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->delete();

        return redirect( action('TicketsController@index') )->with('status', 'The ticket ' . $slug . ' has been deleted!');
    }
}
