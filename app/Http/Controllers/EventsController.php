<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function add()
    {
        return view('admin.events.create');
    }

    public function home()
    {
        return view('admin.events.home');
    }
}
