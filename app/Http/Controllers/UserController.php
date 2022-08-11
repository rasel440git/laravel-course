<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   public function index(){
        $users= User::All();
        return $users;
   }

   public function cusdata(){
    //return dd(DB::table('customers')->where('id','=',2) ->get());
    //return (DB::table('customers')->where('name','mir')->get());
      return dd(DB::table('customers')
                                    ->select('customers.name','invoice.amount')
                                    ->rightjoin('invoice', 'customers.id','=','invoice.customer_id')
                                    ->get());
   }
   public function find($id){
    $user= User::find($id);
    return $user;
   }

   public function delete($id){
    $user= User::findOrFail($id);
     $user->delete();
     return "Data Deleted!";
   }
    public function create(){
    //return "Hello From User Controller";


    $data=[
        'name'=>'Abdul Jabbar',
        'email'=>'test@mail.com',
        'password'=>'123456',
    ];
    User::create($data);
    return "user Data insert successfully!!";

   }


   public function formmake(){
    return view('user.regi');
   }
   public function store(Request $request){
     $request	->validate([
      'name'=>'required',
      'email'=>'required|email',
      'password'=>'required'
     ]);
    return $request->all();
   }
}
