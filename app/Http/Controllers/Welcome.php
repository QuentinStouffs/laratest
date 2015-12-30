<?php
namespace App\Http\Controllers;
use \Request;

class Welcome extends Controller{
    public function __construct(){
        
    }
    public function postIndex(){
        dd(Request::get('q'));
        return view('Welcome');
    }
    public function postTest(){
        
    }
    public function getIndex(){
        return 'salut lol';
    }
}
