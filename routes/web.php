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
Route::group(['middleware' => ['web']],function(){


Route::get('/', function () {
  return view('welcome');
});

Route::get('/main', function () {
  return view('main');
});

Route::get('/profile', function () {
  return view('profile');
});

Route::get('/r-VL', function () {
  return view('vacation');
});

Route::get('/r-SL', function () {
  return view('sick');
});

Route::get('/r-PEL', function () {
  return view('personal');
});

Route::post('/signup',[
  'uses'=>'UserController@postSignUp',
  'as'=>'signup'
]);

Route::post('/signin',[
  'uses'=>'UserController@postSignIn',
  'as'=>'signin'
]);

Route::get('/dashboard', [
  'uses' => 'UserController@getDashboard',
  'as' => 'dashboard'
]);

Route::get('/profile', [
  'uses' => 'UserController@getProfile',
  'as' => 'profile'
]);
Route::get('/signinal',[
  'uses' => 'UserController@getSigninal',
  'as' => 'signinal'
]);
Route::get('/signinfa',[
  'uses' => 'UserController@getSigninfa',
  'as'=>'signinfa'
]);

  Route::post('editProfile', 'UserController@update_avatar');
  Route::get('editProfile', 'UserController@editProfile');
});