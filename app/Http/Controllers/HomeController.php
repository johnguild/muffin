<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Johnguild\Muffincms\Controllers\TestController;



class HomeController extends Controller
{


    use TestController;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }


}
