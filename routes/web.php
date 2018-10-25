<?php

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
use Illuminate\Support\Facades\Route;

Route::get('/emp', function () {
    $names = DB::table('emoloyees')->get();




    return view('emp.index', ['names' => $names]);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/emp/{id}', function ($id) {
    $names = DB::table('emoloyees')->where('id', '=', $id)->get();

   // dd($id);


    return view('emp.info', ['names' => $names]);
});


Route::get('/teachers', 'TeacherController@index');
Route::get('/teachers/new', 'TeacherController@create');
Route::get('/teachers/{teacher}', 'TeacherController@show');
Route::post('/teachers', 'TeacherController@store');

Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts/{post}/comment', 'CommentController@store');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');

Route::post('/logout', 'SessionController@destroy')->name('logout');

Route::get('/runthread', 'TeacherController@callThreadEvent');



Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
