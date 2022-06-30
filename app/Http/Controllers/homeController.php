<?php
namespace App\Http\Controllers;



class homeController extends Controller{
    public function index(){
        $my_name="Rasel";
        $date=[
            'name'=>$my_name
        ];
        return view('home.index',$date);
    }
}