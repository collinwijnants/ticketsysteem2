<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function event()

    {

        $post = Event::all();

        return view('home', compact('home'));

    }



    public function edit($id)

    {

        $post = Event::find($id);

        return view('edit', compact('post'));

    }



    public function update(Request $request, $id)

    {

        $post = Event::find($id);

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

        return redirect('events')->with('status', 'Event updated');

    }
}
