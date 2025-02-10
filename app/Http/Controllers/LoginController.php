<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class LoginController extends Controller
{
    function index() {
        JavaScriptFacade::put([
            'urlBase' => URL::to('/'),
            'currentUrl' => URL::full(),
            'assetUrl' => asset('/')
        ]);

        $data = [
            'title' => 'Login'
        ];

        return view('login', $data);
    }
}
