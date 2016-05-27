<?php
use App\Page;
namespace App\Http\Controllers\Admin;
use Redis;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
class AdminHomeController extends Controller
{
    public function index()
    {
        // Redis::set('test', 'ceshi');
        // $a = Redis::get('test');
        //return $a;
        $validator = Validator::make(
            array('name' => 'dd'),
            array('name' => 'required|min:5'),
            array('name' => '名称必须填写|最小为5')
        );
        if($validator->fails())
        {
            $messages = $validator->messages();
            echo '<pre>';print_r($messages);exit();
        }
        // try{
        //     $validator->newFails();
        // }
        // catch(\Exception $e)
        // {
        //     $msg = $e->getMessage();

        // }

        echo '<pre>';print_r($validator);exit();
        $data = ['a'=>'b','hello'=>'world'];
       return view('AdminHome',$data);
    }
}
