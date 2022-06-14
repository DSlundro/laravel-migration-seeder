<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartialsController extends Controller
{
    public function partials(){
        return view('header');
        return view('footer');
    }
}
