<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
    public function home(){
        $title = 'Healet Website';
        return view('home', compact('title'));
    }

    public function about(){
        $title = 'About Healet';
        return view('about', compact('title'));
    }

    public function shop(){
        $title = 'Healet Shop';
        return view('shop', compact('title'));
    }

    public function blog(){
        $title = 'Healet Blog';
        return view('blog', compact('title'));
    }
}
