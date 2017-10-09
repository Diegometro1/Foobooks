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

//Route::get('/', function () {
//    return view('welcome');
//});


//another way
#Route::view('/' , 'welcome');


Route::get('/', 'WelcomeController@index');


Route::get('/example', function () {
    return view('abc');
});


Route::get('/examples', 'BookController@examples');



Route::get('/book/', 'BookController@index');


Route::get('/book/{title}', 'BookController@show');




/*
Route::get('/book/war-and-peace',  function(){
    return 'you want to view the book war and peace';

});
*/


//route parameters

//Route::get('/book/{title?}', function($title = ''){
//
//    if($title == ' '){
//        return 'you have to specify a book title';
//
//    }
//
//
//    return 'You are viewing war and peace' . $title;
//
//});

