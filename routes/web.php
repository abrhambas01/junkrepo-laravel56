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

// Mongo Experiment
Route::get( '/mongo/add', function () {
    return \App\Data::create([
        'name'    => 'Eric Van Johnson',
        'phone'   => '555-555-5555',
        'company' => 'DiegoDev Group LLC',
        'title'   => 'Waste Of Space'
    ]);
});

Route::get( '/mongo/find', function () {
    return \App\Data::where('name', 'Eric Van Johnson')->first();
});

Route::get( '/mongo/update', function () {
    $user = \App\Data::where('name', 'Eric Van Johnson')->first();
    $user->address = '1234 Somewhere USA';
    $user->save();

    return 'Record updated';
});
// Mongo Experiment End

Route::get('/logout', function() {
    Auth::logout();
    return Redirect::home();
});

Route::view('templates', 'templates');

Route::get('/login', 'IndexController@login');

Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback');

Auth::routes();
