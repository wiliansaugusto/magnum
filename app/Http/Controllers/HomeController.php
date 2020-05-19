<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
<<<<<<< HEAD
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
=======
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return view('home');
=======
        return view('dashboard.home.index');
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
    }
}
