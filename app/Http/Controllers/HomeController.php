<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
     
       
            return view('home');
       
    }
}
