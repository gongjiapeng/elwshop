<?php

namespace App\Http\Controllers\Topc;

use Illuminate\Http\Request;
use App\Jobs\test;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Queue;
class TopcController extends Controller
{
    public function index()
    {//echo 111;exit();
        $job = (new test())->delay(1);
//echo '<pre>';print_r($job);exit();
        $this->dispatch($job);
        //Queue:later(2,new test());
        return view('welcome');
    }
    //
}
