<?php
use App\Http\Controllers\homeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Requests\myRequest;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\post;
use App\Models\address;
use App\Models\tag;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $users= User::take(7)->get();
    return view('home.index',['user'=>$users]);
})->middleware('test');

Route::get('posts', function () {

    $post= post::all();
    return view('home.post',['post'=>$post]);
});

//Route::get('/', [homeController::class, 'index']);
//Route::get('user', [UserController::class, 'create']);
//Route::get('test', 'homeController@index'); //old style

//Route::get('index', [UserController::class, 'cusdata']);
Route::get('index/{id}', [UserController::class, 'find']);
Route::get('delete/{id}', [UserController::class, 'delete']);


Route::get('form',[UserController::class, 'formmake']);
Route::post('profile',[UserController::class, 'store']);

Route::get('set_session',[UserController::class,'set']);
Route::get('get_session',[UserController::class,'getData']);
Route::get('delete_session',[UserController::class,'deleteSessionData']);















Route::get('insert', function () {
    DB::table('customers')->insert([
        'name'=>'Mir',
        'address'=>'Cumilla,BD'
    ]);
});

Route::get('post',function(){
    $data=[ 
        'user_id'=>'2',
        'title'=>'test2',
        'desc'=>'test 2 this is the test post description!',
        'status'=>1,
    ];
    //DB::table('users')->create($data);
    post::create($data);
});

Route::get('post_obj',function(){
    $post= new post();
    
        $post->user_id=3;
        $post->title='test3';
        $post->desc='test with pdo obj wey this is the test post description!';
        $post->status=1;
        $post->save();
});

Route::get('get_post',function(){
    
    $Arrdata= post::find(2);
    return $Arrdata->desc;
});


Route::get('delete',function(){
    $post= new post();
    $post= post::findorFail(7);
    $post->delete();
});
Route::get('oneToOne',function (){
    $data= User::find(1);
    return $data->address->city;
});

Route::get('oneToOneInvers',function (){
    $data= address::find(2);
    //echo $data->city;
    return $data->User->name;
});

Route::get('hasMany',function (){
    $data= User::find(1);
    //echo $data->city;
   // return $data->posts[0]->title;
   foreach($data->posts as $post){
        echo $post-> title.'</br>';
   }
});

Route::get('hasManyInvers',function (){
    $data= post::find(1);
    //echo $data->city;
    $data->User->name='Modon Kumar';
    $data->User->save();
    return $data->User->name;
   
});

Route::get('manyToMany',function (){
    $data= post::find(1);
    
    return dd($data->tag[1]->title);
});

Route::get('manyToManyRe',function (){
    $data= tag::find(1);
    foreach($data->post as $post){
        echo $post->title.'</br>';
    }
    //return dd($data->post[1]->title); 
});

Route::get('attached',function (){
    $data= post::find(2);
    $data->tags()->attach([1,2]);     
});

Route::get('dettached',function (){
    $data= post::find(2);
    $data->tags()->detach([1,2]);     
});