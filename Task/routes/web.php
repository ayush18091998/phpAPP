<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Mycontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.home');
});

 
Route::get('/user/{id}', function (Request $request, string $id) {
  
    return 'User '.$id;
});
// Route::get('/file/{name}/{id?}',function($name,$id=null){
//     $data=compact('name','id');
//     return view('demo')->with($data);
// });
Route::get('foo', function () {
    return 'Hello World';
 });
// Route::get('/register',[Mycontroller::class,'index']);
// Route::post('/newPage',[Mycontroller::class,'store']);
// Route::get('/newPage/view',[Mycontroller::class,'view']);
// Route::get('/deleting/{ID}',[Mycontroller::class,'delete']);
// Route::get('/pass/{id}',[Mycontroller::class,'pass']);
// Route::post('/update/{id}',[Mycontroller::class,'update']);

Route::controller(Mycontroller::class)->group(function () {
    Route::get('/register','index');
    Route::post('/newPage','store');
    Route::get('/newPage/view','view');
    Route::get('/deleting/{ID}','delete');
    Route::get('/pass/{id}','pass');
    Route::post('/update/{id}','update');
});