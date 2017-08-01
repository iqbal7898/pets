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

use MongoDB\Client as Mongo;

Route::get('mongo', function(Request $request) {
    $collection = (new Mongo)->db_test->mycollection;
    return $collection->find()->toArray();
});

Route::get('/mongo1', function() {
    $user = Jokes::all();
    print_r($user);
});