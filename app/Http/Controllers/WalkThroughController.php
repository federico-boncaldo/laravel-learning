<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalkThroughController extends Controller
{
    public function index(){
    	return view('walkthrough.index');
    }
}
