<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function imageRoute(){
        return view('upload.image');
    }
   public function store(Request $request){
    // echo  $request->file('image')->getClientOriginalName();
    // echo  $request->file('image')->extension();

    $path = $request->file('image')->store('images');
    return $path;
   }

   public function files(){
    echo $url= asset(Storage::url('images/GOYrU9rb7HVfLj0JENou1LaIexsZSndpaBQS99D4.jpg'));
    echo "<img src='$url'>";
   }

   public function delete(){
    Storage::delete('images/GOYrU9rb7HVfLj0JENou1LaIexsZSndpaBQS99D4.jpg');
   }
}
