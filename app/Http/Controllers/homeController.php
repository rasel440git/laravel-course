<?php
namespace App\Http\Controllers;



class homeController extends Controller{
    public function index(){
   
        $this->data['name']="Rasel";
        $this->data['add']="Mirpur,Dhaka";
        
        return view('home.index',$this->data);
    }
}