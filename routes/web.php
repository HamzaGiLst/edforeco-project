<?php
use Illuminate\Support\Facades\DB ;
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
    return view('welcome');
});

Route::get('/read',function (){
    $data = DB::select('select * from users where id = ?' ,['2']);
   return $data ;
});
Route::get('/formation',function (){
    return view('formations.submit_formation');
});