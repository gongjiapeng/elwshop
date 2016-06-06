<?php
//use App\Page;
namespace App\Http\Controllers\Admin;
use Redis;
use Illuminate\Http\Request;
use Curl\Curl;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use validator;
class AdminHomeController extends Controller
{
    public function index()
    {
        $client = new Curl();

        $url = 'http://dev17.newmall.molbase.com/ajax/order/submit_order';
        $fileds = [
            'region_id'=>'516',
            'address_id'=>'3172',
            'customer_id'=>'196942',
            'customer_name'=>'xxxx公司',
            'payment_type'=>'1',
            'ship_type'=>'1',
            'invoice_type'=>'2',
            'buy_id'=>'',
            'buy_num'=>'',
            'buy_type'=>'now',
            'ship_price'=>'2.00',
            'goods_price'=>'3500.00',
        ];
        // header("Content-type:text/html;Charset=utf8");
        // $ch =curl_init();
        // curl_setopt($ch,CURLOPT_URL,$url);

        $header = [
            //'Origin'=>'http://dev17.newmall.molbase.com',
            //'Referer'=>'http://dev17.newmall.molbase.com/order_confirm.html',
            //'Cookie'=>'Hm_lvt_16ee3e47bd5e54a79fa2659fe457ff1e=1462788064; __zlcmid=aYfXJrCi1Rk3aY; pin=0; count_views_key=3f729891e71d2e3840d015e58ee8fd2c; deny_ip=AzFWOwIyUnkGMFVtUWlbcgBtV2tQb1x8Cz8HNlxi; deflang=zh; current_user_key=aa58b658e60e6d6a4691cbc6e40db1ae; ECM_ID=kv5sk8vtns1ti1vopfh7vddc25; _ga=GA1.2.301575980.1464753445; laravel_session=04bcf719a3b38a0c40c2b11189afa1922a96068a'
            ];
        //curl_setopt($ch,CURLOPT_POST,true);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            // curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            // curl_setopt( $ch, CURLOPT_POST, 1 );
            // curl_setopt($ch,CURLOPT_HEADER,true);
            // curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
        //curl_setopt($ch,CURLOPT_COOKIE,'Hm_lvt_16ee3e47bd5e54a79fa2659fe457ff1e=1462788064; __zlcmid=aYfXJrCi1Rk3aY; pin=0; count_views_key=3f729891e71d2e3840d015e58ee8fd2c; deny_ip=AzFWOwIyUnkGMFVtUWlbcgBtV2tQb1x8Cz8HNlxi; deflang=zh; current_user_key=aa58b658e60e6d6a4691cbc6e40db1ae; ECM_ID=kv5sk8vtns1ti1vopfh7vddc25; _ga=GA1.2.301575980.1464753445; _gat=1; laravel_session=7ebf95a0492f2f875cfa54cc414e26384b64cb66');
        //curl_setopt( $ch, CURLOPT_POSTFIELDS, $fileds );

        //$content = curl_exec($ch);
//echo '<pre>';print_r($content);exit();

        // $client->setHeader('Accept', 'application/json, text/javascript, */*; q=0.01');
        // $client->setHeader('Accept-Encoding', 'gzip, deflate');
        // $client->setHeader('Accept-Language', 'zh-CN,zh;q=0.8,en;q=0.6');
        // $client->setHeader('Cache-Control', 'nocache');
        //$client->setHeader('Connection', 'keep-alive');
        //$client->setHeader('Content-Length', '209');
        //$client->setHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        $client->setHeader('Cookie','Hm_lvt_16ee3e47bd5e54a79fa2659fe457ff1e=1462788064; __zlcmid=aYfXJrCi1Rk3aY; pin=0; count_views_key=3f729891e71d2e3840d015e58ee8fd2c; deny_ip=AzFWOwIyUnkGMFVtUWlbcgBtV2tQb1x8Cz8HNlxi; deflang=zh; current_user_key=aa58b658e60e6d6a4691cbc6e40db1ae; ECM_ID=kv5sk8vtns1ti1vopfh7vddc25; _ga=GA1.2.301575980.1464753445; laravel_session=04bcf719a3b38a0c40c2b11189afa1922a96068a');
        //$client->setHeader('Host','dev17.newmall.molbase.com');
        $client->setHeader('Origin','http://dev17.newmall.molbase.com');
        //$client->setHeader('Pragma','no-cache');
        $client->setHeader('Referer','http://dev17.newmall.molbase.com/order_confirm.html');
       // $client->setHeader('User-Agent', "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) molbase_access ");
        //$client->setHeader('Accept', '*/*');
        echo '<pre>';print_r($fileds);exit();
        $res = $client->post($url, $fileds);
        echo '<pre>';print_r($res);exit();
        // $validator = Validator::make(
        //     array('name' => 'dd'),
        //     array('name' => 'required|min:5'),
        //     array('name' => '名称必须填写|最小为5')
        // );
        // if($validator->fails())
        // {
        //     $messages = $validator->messages();
        //     echo '<pre>';print_r($messages);exit();
        // }
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
