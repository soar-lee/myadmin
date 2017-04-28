<?php

namespace App\Http\Controllers;
use Encore\Admin\Auth\Database\Building;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
    public function index($id = 1)
    {
        $menu = DB::table('building_type')->limit(11)->get()->toArray();
        $items = DB::table('building')->where('type',$id)->orderby('updated_at','desc')->get()->toArray();
        foreach ($items as $key=>$item){
            $images = DB::table('building_image')->where('bid',$item->id)->get()->toArray();
            if(!$images){
                unset($items[$key]);
            }else{
                $items[$key]->images = $images;
            }
        }
        return view('index',[
            'menus' => $menu,
            'items' => $items
        ]);
    }
    
    public function show($id = 1)
    {
        $data = Building::find($id);
        return $data['content'];
    }
}
