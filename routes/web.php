<?php
Auth::loginUsingId(1);
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

Auth::routes();

Route::get('/user/{user}', 'UserController@show_user')->name('show.user');
Route::get('/user/{user}/profile/', 'UserController@index')->name('show.profile');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/post/create', 'PostController@store')->name('store.post');
Route::get('/post/{post}', 'PostController@show')->name('show.post');
Route::get('/mentions/{user}', 'UserController@clearmentions')->name('clear.mentions');
Route::get('/post/{post}/like', 'PostController@like')->name('like.post');
Route::get('/post/{post}/unlike', 'PostController@unlike')->name('unlike.post');
Route::get('/home/?tag={tag}', 'TagsController@show')->name('get.tags');
Route::get('/home/?tag={tags}', 'TagsController@show')->name('search.tag');
Route::get('/follow/{user}', 'FriendController@follow')->name('follow');
Route::get('/followers', 'FriendController@followers')->name('followers');
Route::get('/following', 'FriendController@following')->name('following');


