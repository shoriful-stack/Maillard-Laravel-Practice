<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function home(Request $request){
        return view('site.index'); // site/home.blade.php
    }

    function menu(){
        return view('site.menu'); // site/menu.blade.php
    }

    function about(){
        return view('site.about'); // site/about.blade.php
    }

    function reservations(){
        return view('site.reservations'); // site/reservations.blade.php
    }
}
