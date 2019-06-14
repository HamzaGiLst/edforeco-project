<?php

use App\Formation;
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
///test
Route::get('/cond', function () {
    return view('profiles.condidat.login');
});
///Route::get('/regi', function () {
//    return view('profiles.condidat.register');
//});
//Route::get('/condidat/register','rec\ProfilesController@index');
//Route::post('/condidat/create','rec\ProfilesController@store');
Route::resource('condidats','rec\ProfilesController');
Route::get('condidat/login','rec\ProfilesController@login_index');

Route::resource('company','rec\ProfilecompanyController');


Route::get('/log', function () {
    return view('profiles.company.clogin');
});
Route::get('/camp',['middleware'=>'education', function () {
    $post=\App\Annonce::all();
    //dd($post);
    return view('profiles.company.cdashboard',compact('post'));
}]);
//////
/// Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('mainapp');
});

Route::get('/read',function (){
    $data = DB::select('select * from users where id = ?' ,['2']);
   return $data ;
});



#----------------------------------------------------------------#
#                   FORMATION AND EDUCATION ROUTE                #
#----------------------------------------------------------------#
Route::group(['middleware'=>'web'],function (){
    Route::get('/formation','edu\FormationController@index');
    Route::post('/submit','edu\FormationController@submit');
    Route::post('/s','edu\FormationController@store');
    Route::get('/f','edu\FormationController@list_demande');
});

Route::resource('/education','edu\FormationController');






#----------------------------------------------------------------#
#                   COACHING ROUTE                               #
#----------------------------------------------------------------#
Route::get('/coaching','coach\CoachingController@index');
Route::post('/store','coach\CoachingController@open_case');





#----------------------------------------------------------------#
#                   RECRUTENET EMPLOIr ROUTE                     #
#----------------------------------------------------------------#
Route::get('/p','rec\RecrutemetController@post_page')->middleware('education');

Route::post('/postannonce','rec\RecrutemetController@post_annoce');

#find jobs
Route::get('/rhome','rec\RecrutemetController@searchoffre');

Route::get('/job/{id}','rec\RecrutemetController@postuler');

Route::get('/jobs','rec\RecrutemetController@showJobs');
// save jobs

Route::get('/savejob','rec\RecrutemetController@save_job');

//mail demande emploi
Route::get('/sendDemandeJob','rec\RecrutemetController@sendDemendEmploi');
#----------------------------------------------------------------#
#                   ADMIN ROUTE           -                      #
#----------------------------------------------------------------#
Route::get('/admin','AdminController@adminPanel');



//################################################################
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



#----------------------------------------------------------------#
#                   Profiles                                     #
#----------------------------------------------------------------#

Route::post('/logintoprofile','rec\ProfilecompanyController@login');
Route::get('/delete/{id}','rec\ProfilecompanyController@deleteAnnonce');
Route::get('/entreprise/logout','rec\ProfilecompanyController@loggedOut');

########condidat
Route::post('/loginCondidat','rec\ProfilesController@login');
Route::get('/condidat/1','rec\ProfilesController@profile');


#--------------------------------------------------
#                 Newsletter
#---------------------------------------------------
Route::post('/newsletter','newsLetterController@maillist');