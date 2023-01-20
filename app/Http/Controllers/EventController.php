<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event()
        {

            return view('event');

        }

       
    public function eventform(Request $request)
    {

        $post = new Event;

        $post->event_name = $request->event_name;

        $post->photo = $request->photo;

        $post->event_start = $request->event_start;

        $post->event_end = $request->event_end;

        $post->max_tickets = $request->max_tickets;

        $post->location = $request->location;

        $post->price = $request->price;

        $post->preorder_price = $request->preorder_price;

        $post->description = $request->description;

        $post->save();

        return redirect('/')->with('status', 'Event added');

    }
}
