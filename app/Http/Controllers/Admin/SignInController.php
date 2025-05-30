<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JavaScript;
use URL;

class SignInController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Admin | International Animals Genetic Database (v2!)'
        ];

        JavaScript::put([
            'urlBase' => URL::to('/'),
            'assetUrl' => asset('/'),
        ]);
        return view('admin.signin', $data);
    }
}
