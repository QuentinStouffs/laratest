<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class articleController extends Controller
{
    public function show($n){
        return view('article')->withNumero($n);
    }
}
