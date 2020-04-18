<?php
/*
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
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

use App\Http\Controllers\TelechargementController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HelloController@about' );

Route::get('/service', 'ServiceController@index' );
Route::post('/service', 'ServiceController@store' );

//Route::get('/customers','CustomerController@index');
Route::get('/customers/create','CustomerController@create');
Route::post('/customers','CustomerController@store');
Route::get('/customers/{customer}','CustomerController@show');
/*
Route::get('/customers/{customer}/edit','CustomerController@edit');
Route::patch('/customers/{customer}','CustomerController@update');
Route::delete('/customers/{customer}','CustomerController@destroy');
*/

Route::get('/questionnaires/create', 'QuestionnaireController@create');
Route::post('/questionnaires', 'QuestionnaireController@store');
Route::get('/questionnaires/{questionnaire}','QuestionnaireController@show');


Route::get('/questionnaires/{questionnaire}/questions/create', 'questionController@create');
Route::post('/questionnaires/{questionnaire}/questions', 'questionController@store');
Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'questionController@destroy');

Route::get('/surveys/{questionnaire}-{slug}','SurveyController@show');
Route::post('/surveys/{questionnaire}-{slug}','SurveyController@store');

Route::get('pay', 'PayOrderController@store');

Route::get('channels', 'ChannelController@index');

Route::get('posts/create', 'PostController@create');

//route Dropzone
Route::get('/images', 'TelechargementController@index');
//Route::get('/download/{id}','TelechargementController@download');
Route::delete('/images/{imageUpload}', 'TelechargementController@destroy');

Route::get('/accueil', 'AccueilAdminController@show')->name('accueil');
Route::get('accueil/{id}/download','AccueilAdminController@download')->name('download');

Route::get('/accueileleve', 'AccueilEleveController@index')->name('accueileleve');
Route::get('/dashboardeleve', 'AccueilEleveController@show')->name('dashboardeleve');
Route::get('dashboardeleve/{id}/download','AccueilEleveController@download')->name('download');

Route::get('/graphs/create', 'GraphiqueStudentController@create');
Route::post('/graphs', 'GraphiqueStudentController@store');
Route::get('/graphs/{graph}','GraphiqueStudentController@show' );
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

/*
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('users','UsersController',['except'=>['show'.'create'.'store']]);
});
*/



Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except'=>['show','create', 'store']]);

});




/*
Route::get('/email', function () {

    Mail::to('email@email.com')->send(new WelcomeMail());
    return new WelcomeMail();
});
*/

