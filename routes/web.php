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

// Route::get('/', function () {
//     return abort(403, 'Unauthorized action.');
// });
Route::get('/', 'Home\HomeController@index');
Route::get('/createacc', 'Account\AccountController@index');
Route::get('/players', 'Players\PlayersController@index');

Route::get("/createacc/send", "Account\AccountController@createAcc");
Route::get("/login", "Account\AccountController@loginAcc");
Route::get("/logout", "Account\AccountController@logoutAcc");
Route::get("/myaccount", "Account\MyAccountController@index");
Route::get("/create-character", "Players\PlayersController@createCharacter");
Route::get("/create-character/save", "Players\PlayersController@create");
Route::get("/delete-character", "Players\PlayersController@formDeleted");
Route::get("/delete-character/save", "Players\PlayersController@deleteCharacter");
