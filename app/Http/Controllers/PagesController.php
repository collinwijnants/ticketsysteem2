<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class PagesController extends Controller
{
    public function home(){

        return view('home');
    }
    public function events(){
        $events = Event::all();
        return view('events')->with('events', $events);
    }
}
