<?php
namespace App\Http\Controllers;



class homeController extends Controller{
    public function index(){
   
        $this->data['name']="Rasel";
        $this->data['add']="Mirpur,Dhaka";
        $this->data['sub']=['bangla','english','math'];
        
        return view('home.index',$this->data);
    }
}