<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class ViewController extends Controller
{
    public function showHome(){
      return view('content.home');
    }
}
