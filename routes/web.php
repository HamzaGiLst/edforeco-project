<?php

use App\Formation;
use Illuminate\Support\Facades\DB ;
//use Illuminate\Routing\Route;

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



#----------------------------------------------------------------#
#                   FORMATION AND EDUCATION ROUTE                #
#----------------------------------------------------------------#
Route::get('/formation','edu\FormationController@index');
Route::post('/submit','edu\FormationController@submit');
Route::get('/f','edu\FormationController@list_demande');






#----------------------------------------------------------------#
#                   COACHING ROUTE                               #
#----------------------------------------------------------------#
Route::get('/coaching','coach\CoachingController@index');
Route::post('/store','coach\CoachingController@open_case');





#----------------------------------------------------------------#
#                   RECRUTENET EMPLOI ROUTE                      #
#----------------------------------------------------------------#
Route::get('/r','rec\RecrutemetController@offre');

Route::get('/p','rec\RecrutemetController@post_page');

Route::post('/postannonce','rec\RecrutemetController@post_annoce');

Route::get('/job','rec\RecrutemetController@postuler');
//mail demande emploi
Route::get('/sendDemandeJob','rec\RecrutemetController@sendDemendEmploi');
#----------------------------------------------------------------#
#                   ADMIN ROUTE           -                      #
#----------------------------------------------------------------#
Route::get('/admin','AdminController@traiter_formation');


//################################################################
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
