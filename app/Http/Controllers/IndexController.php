<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
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
    public function index(Request $request)
    {
        return view('index',[
            "menu" => [
                ['url' => "http://www.baidu.com",'name' => '首页'],
                ['url' => "http://www.baidu.com",'name' => '简约'],
                ['url' => "http://www.baidu.com",'name' => '后现代'],
                ['url' => "http://www.baidu.com",'name' => '新中式'],
                ['url' => "http://www.baidu.com",'name' => '新古典'],
                ['url' => "http://www.baidu.com",'name' => '欧美古典'],
                ['url' => "http://www.baidu.com",'name' => '欧美乡村'],
                ['url' => "http://www.baidu.com",'name' => '暖心北欧'],
                ['url' => "http://www.baidu.com",'name' => '混搭'],
                ['url' => "http://www.baidu.com",'name' => '小户型'],
                ['url' => "http://www.baidu.com",'name' => '首页'],
                ['url' => "http://www.baidu.com",'name' => '首页'],
                ['url' => "http://www.baidu.com",'name' => '首页'],
                ['url' => "http://www.baidu.com",'name' => '首页'],
                ['url' => "http://www.baidu.com",'name' => '首页'],
            ]
        ]);
    }
}
