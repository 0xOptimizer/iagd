<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function index() {
        $data = [
            'title' => 'International Animals Genetic Database (v2!)'
        ];

        return view('front', $data);
    }
    function register(Request $request) {
        $agent = new Agent();
        
        $view = $agent->isMobile() ? 'm_register' : 'register';
        
        $data = [
            'title' => 'Register your Pet — IAGD'
        ];

        return view($view, $data);
    }
}