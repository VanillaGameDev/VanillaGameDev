<?php

namespace App\Http\Controllers;


class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store()
    {
        ddd('Summited');
    }
}
