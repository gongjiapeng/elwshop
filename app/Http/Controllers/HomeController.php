<?php

namespace App\Http\Controllers;
use Auth;
use Storage;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {// 111;exit();
        //echo '<pre>';print_r(Auth::getName());exit();
        //Storage::disk('local')->put('file.txt', 'Contents');
        return view('home');
    }
}
