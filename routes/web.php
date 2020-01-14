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
/*
Route::get('/email', function () {

    Mail::to('email@email.com')->send(new WelcomeMail());
    return new WelcomeMail();
});
*/

Route::get('/about', 'HelloController@about' );

Route::get('/service', 'ServiceController@index' );
Route::post('/service', 'ServiceController@store' );

Route::get('/customers','CustomerController@index');
Route::get('/customers/create','CustomerController@create');
Route::post('/customers','CustomerController@store');
Route::get('/customers/{customer}','CustomerController@show');
Route::get('/customers/{customer}/edit','CustomerController@edit');
Route::patch('/customers/{customer}','CustomerController@update');
Route::delete('/customers/{customer}','CustomerController@destroy');

Route::get('/questionnaires/create', 'QuestionnaireController@create');
Route::post('/questionnaires', 'QuestionnaireController@store');
Route::get('/questionnaires/{questionnaire}','QuestionnaireController@show');


Route::get('/questionnaires/{questionnaire}/question/create', 'questionController@create');
Route::post('/questionnaires/{questionnaire}/question', 'questionController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


