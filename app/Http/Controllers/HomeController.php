<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $data = 'test';
        return view('welcome', [
            'data'=> $data
        ]);
    }
}
