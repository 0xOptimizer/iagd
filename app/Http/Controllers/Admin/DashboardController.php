<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JavaScript;
use URL;

class DashboardController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Dashboard | International Animals Genetic Database (v2!)'
        ];

        JavaScript::put([
            'urlBase' => URL::to('/'),
            'assetUrl' => asset('/'),
        ]);
        return view('admin.dashboard', $data);
    }
}
