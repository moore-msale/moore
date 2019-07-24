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

Route::get('/portfolio_queue', function () {
    return view('portfolio',['portfolios' => \App\Portfolio::all()]);
});
Route::get('/jobs', function () {
    return view('jobs');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/portfolio/{id}','PortfolioController@page')->name('portfolio');
