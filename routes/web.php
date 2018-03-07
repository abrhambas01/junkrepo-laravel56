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

Route::get( '/', function () {
    return view( 'welcome' );
} );

Auth::routes();

Route::get( '/home', 'HomeController@index' )->name( 'home' );

Route::get( '/mongo/add', function () {
    return \App\Data::create([
        'name'    => 'Eric Van Johnson',
        'phone'   => '8588153597',
        'company' => 'DiegoDev Group LLC',
        'title'   => 'Waste Of Space'
    ]);
} );
