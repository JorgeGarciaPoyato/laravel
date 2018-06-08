<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
      //  $this->middleware('auth');
    //}

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about.index');
    }

    public function posts()
    {
        return view('posts.posts');
    }

    public function suscripcion()
    {
        return view('posts.suscripcion');
    }

}
