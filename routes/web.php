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

Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
        'Database defaultStringLength' => Illuminate\Database\Schema\Builder::$defaultStringLength,
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});








Route::get('/env', function(){
    dump(config('app.name'));
    dump(config('app.env'));
    dump(config('app.debug'));
    dump(config('app.url'));




});

Route::get('/practice/{n?}', 'PracticeController@index');



Route::get('/', 'WelcomeController');


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
