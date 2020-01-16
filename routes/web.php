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

/**
 * Sample Email Route
 */
// Route::get('sendemail', function () {

//     $data = [ 'name' => 'Learning Laravel'];

//     Mail::send('emails.welcome', $data, function ($message) {
//         $message->from('rezaul.cse.mbstu@gmail.com', 'Rezaul Islam');
//         $message->to('rezaulcsembstu@yahoo.com', 'MD. Rezaul Islam');
//         $message->subject('This test mail. DO NOT REPLY');
//     });

//     return 'Your email has been sent successfully';

// });



/**
 * Laravel Default Pages
 */
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Basic Pages
 */
Route::get('/welcome', 'PagesController@welcome')->name('welcome');
Route::get('/products', 'PagesController@products');
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

Route::get('/blog', 'BlogsController@index');
Route::get('/blog/{slug?}', 'BlogsController@show');


/**
 * Auth Routes from Book
 */
// Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
// Route::post('users/register', 'Auth\RegisterController@register');
// Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('users/login', 'Auth\LoginController@login');
// Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('users/custom/auth/register', 'SocialController@showRegistrationForm');
Route::get('users/custom/auth/login', 'SocialController@showLoginForm')->name('login');

/**
 * Routes for Socialite
 */
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

/**
 * Admin Routes
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'], function () {
    // Route::get('users', 'UsersController@index');
    // Route::get('/user/{user?}', 'UsersController@show');
    // Route::get('/user/{slug?}/edit', 'UsersController@edit');
    // Route::post('/user/{slug?}/edit', 'UsersController@update');
    // Route::post('/user/{slug?}/delete', 'UsersController@destroy');

    Route::get('/products', 'PagesController@products');

    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');
    Route::resource('posts', 'PostsController');
    Route::resource('categories', 'CategoriesController');
});



