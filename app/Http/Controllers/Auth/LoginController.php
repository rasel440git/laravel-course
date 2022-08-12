<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
   public function index(){
    return view('Auth.login');
   }

   public function loginUser(Request $request){
       $data= $request->only(['email','password']);
      if(Auth::attempt($data)){
         return redirect()->intended('/dashboard');
      }
      return redirect()->to('/login');
     }

     public function logout(){
      Auth::logout();
      return redirect()->to('/login');
     }
}
