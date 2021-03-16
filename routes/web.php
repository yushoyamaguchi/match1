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
 
  /*Route::get('/profile',[
  'uses' => 'PeopleController@getProfile',
  'as' => 'people.profile'
  ]);*/
  
  Route::get('/login',[
  'uses' => 'PeopleController@getLogin',
  'as' => 'people.login'
  ]);
  
  Route::get('/tosignin',[
  'uses' => 'PeopleController@getTosignin',
  'as' => 'people.tosignin'
  ]);
  
  Route::post('/login',[
  'uses' => 'PeopleController@postLogin',
  'as' => 'people.login'
  ]);
  
  
 
});

Route::group(['middleware' => ['auth']], function() {

  Route::get('people/profile',[
  'uses' => 'PeopleController@getProfile',
  'as' => 'people.profile'
  ]);
  
    Route::get('people/logout',[
    'uses' => 'PeopleController@getLogout',
    'as' => 'people.logout'
  ]);
});


Route::group(['prefix' => 'contents'], function() {

Route::group(['middleware' => ['auth']], function() {

  Route::get('/makeposts',[
    'uses' => 'PostController@getMakeposts',
    'as' => 'contents.makeposts'
  ]);
  
  Route::post('/makeposts',[
    'uses' => 'PostController@postMakeposts',
    'as' => 'contents.makeposts'
  ]);
  
  Route::get('/list',[
    'uses' => 'PostController@list',
    'as' => 'contents.list'
  ]);
  
  Route::get('/wait',[
    'uses' => 'PostController@wait',
    'as' => 'contents.wait'
  ]);
  
  Route::get('/search',[
    'uses' => 'PostController@search',
    'as' => 'contents.search'
  ]);
  
  
  
  Route::get('detail/{id}','PostController@detail');
  
  Route::get('/{id}','PostController@show');
  
  Route::delete('/{id}','PostController@destroy');
  
  Route::get('/allow/{id}','PostController@allow');
  
  Route::post('/allow/{id}','PostController@allowing');
  
});

 
});

