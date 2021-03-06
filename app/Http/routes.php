<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*View::composer('stats', function($view){
  $view->with('stats',app('App\Stats'));
});*/


Route::get('/', 'ArticlesController@index');
Route::get('search',['as'=>'articles.search','uses'=>'ArticlesController@search']);
Route::resource('articles','ArticlesController');
Route::get('tags/{tags}','TagsController@show');
Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
  ]);

Route::get('foo',['middleware'=>'manager',function(){

   return 'this page may only be viewed by manager!'; 
  
  }]);

Route::get('items', 'ItemsController@index');