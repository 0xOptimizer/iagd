<?php

namespace App\Http\Controllers;

class CallbacksController extends Controller
{
    public function lounge_link()
    {
        $data = [
            'title' => 'Lounge Link'
        ];

        return view('callbacks.lounge_link', $data);
    }
}