<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    	echo "Home";
    }

    public function about(){
    	echo "About";
    }

    public function contact(){
    	echo "Contact";
    }
}
