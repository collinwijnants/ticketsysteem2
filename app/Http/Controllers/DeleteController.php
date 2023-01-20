<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($id)

    {

        $post = Event::find($id);

        $post->delete();



        return redirect('events')->with('status', 'Event deleted');

    }
}
