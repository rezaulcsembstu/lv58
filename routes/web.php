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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('sendemail', function () {

//     $data = [ 'name' => 'Learning Laravel'];

//     Mail::send('emails.welcome', $data, function ($message) {
//         $message->from('rezaul.cse.mbstu@gmail.com', 'Rezaul Islam');
//         $message->to('rezaulcsembstu@yahoo.com', 'MD. Rezaul Islam');
//         $message->subject('This test mail. DO NOT REPLY');
//     });

//     return 'Your email has been sent successfully';

// });

Route::get('/', 'PagesController@home')->name('root');
Route::get('/home', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about');
//Route::get('/contact', 'PagesController@contact');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit', 'TicketsController@edit');
Route::post('/ticket/{slug?}/edit', 'TicketsController@update');
Route::post('/ticket/{slug?}/delete', 'TicketsController@destroy');
Route::post('/comment', 'CommentsController@newComment');

Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('users/login', 'Auth\LoginController@login');
Route::get('users/logout', 'Auth\LoginController@logout');

Route::get('/blog', 'BlogsController@index');
Route::get('/blog/{slug?}', 'BlogsController@show');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'], function () {
    // Route::get('users', 'UsersController@index');
    // Route::get('/user/{user?}', 'UsersController@show');
    // Route::get('/user/{slug?}/edit', 'UsersController@edit');
    // Route::post('/user/{slug?}/edit', 'UsersController@update');
    // Route::post('/user/{slug?}/delete', 'UsersController@destroy');
    Route::get('/', 'PagesController@home');
    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');
    Route::resource('posts', 'PostsController');
    Route::resource('categories', 'CategoriesController');
});
