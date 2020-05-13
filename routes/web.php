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
//test route
Route::get('/test', 'PagesController@test');
Route::get('/products', 'PagesController@products');
Route::get('/about', 'PagesController@about');
Route::get('/contactCrop', 'PagesController@contactCrop');
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
// Route::get('users/register', 'Auth\RegisterController@showRegistrationForm')->name('default.register');
// Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('default.login');
// Route::get('users/logout', 'Auth\LoginController@logout')->name('default.logout');
Route::get('users/custom/auth/socials/register', 'SocialsController@showRegistrationForm')->name('custom.auth.socials.register');
Route::post('users/custom/auth/socials/register', 'Auth\RegisterController@register');
Route::get('users/custom/auth/socials/login', 'SocialsController@showLoginForm')->name('custom.auth.socials.login');
Route::post('users/custom/auth/socials/login', 'Auth\LoginController@login');

/**
 * Route for AJAX Auth
 */
Route::get('users/custom/auth/ajax/register', 'AjaxController@getRegister');
Route::post('users/custom/auth/ajax/register', 'AjaxController@postRegister');
Route::get('users/custom/auth/ajax/login', 'AjaxController@getLogin');
Route::post('users/custom/auth/ajax/login', 'AjaxController@postLogin');

/**
 * Routes for Socialite
 */
Route::get('/auth/redirect/{provider}', 'SocialsController@redirect');
Route::get('/callback/{provider}', 'SocialsController@callback');

Route::get('/json', 'BlogsController@json');

/**
 * Image realated routes
 */
Route::resource('images', 'ImagesController');
Route::post('upload', 'ImagesController@store');
Route::post('storeImages', 'ImagesController@storeImages');
Route::post('croppedImage', 'ImagesController@storeCroppedImage');
/**
 * Admin Routes
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'], function () {
//Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['role:super-admin|admin|manager']], function () {
    // Route::get('users', 'UsersController@index');
    // Route::get('/user/{user?}', 'UsersController@show');
    // Route::get('/user/{slug?}/edit', 'UsersController@edit');
    // Route::post('/user/{slug?}/edit', 'UsersController@update');
    // Route::post('/user/{slug?}/delete', 'UsersController@destroy');

    Route::get('home', 'PagesController@home')->name('admin.home');

    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');
    Route::resource('posts', 'PostsController');
    Route::resource('categories', 'CategoriesController');
});

