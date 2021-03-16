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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'user'], function() {
 
  Route::get('/signup',[
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup'
  ]);
 
});


Route::group(['prefix' => 'people'], function() {
 
  Route::get('/signup',[
    'uses' => 'PeopleController@getSignup',
    'as' => 'people.signup'
  ]);
  
   Route::post('/signup',[
  'uses' => 'PeopleController@postSignup',
  'as' => 'people.signup'
  ]);
 
  Route::get('/profile',[
  'uses' => 'PeopleController@getProfile',
  'as' => 'people.profile'
  ]);
  
  Route::get('/signin',[
  'uses' => 'PeopleController@getSignin',
  'as' => 'people.signin'
  ]);
  
  Route::post('/signin',[
  'uses' => 'PeopleController@postSignin',
  'as' => 'people.signin'
  ]);
 
});


Route::group(['middleware' => ['auth']], function() {
  Route::get('people/profile',[
  'uses' => 'PeopleController@getProfile',
  'as' => 'people.profile'
  ]);
});

