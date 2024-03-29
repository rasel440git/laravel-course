<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function index(){
        return view('Auth.register');
       }

    public function store(Request $request){
        $data= $request->only(['name','email']);
        $data['password']= Hash::make($request->get('password'));
        User::create($data);
        return "Data insert Successfully";
       }
}
