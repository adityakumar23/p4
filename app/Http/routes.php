<?php


#===========================================================================
#Authentication routes
#===========================================================================

#to display the login page
Route::get('/login', 'Auth\AuthController@getLogin');

#post login goes to the default page for every user
Route::post('/login', 'Auth\AuthController@postLogin');

#to display the register page
Route::get('/register', 'Auth\AuthController@getRegister');

#post registering the page to be displayed
Route::post('/register', 'Auth\AuthController@postRegister');

#after logout the user should be sent to the home page

Route::get('/logout', 'Auth\AuthController@logout');



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


#default page displayed
Route::get('/', 'TaskmanageController@getIndex');

Route::get('/incomplete', 'TaskmanageController@getIncomplete');
Route::get('/complete', 'TaskmanageController@getComplete');
Route::get('/alltasks', 'TaskmanageController@getAlltasks');
Route::get('/add', 'TaskmanageController@getAdd');
Route::post('/add', 'TaskmanageController@postAdd');

Route::get('/editcomp/{id?}', 'TaskmanageController@getEditcomplete');
Route::post('/editcomp', 'TaskmanageController@postEditcomplete');


Route::get('/editincomp/{id?}', 'TaskmanageController@getEditincomplete');
Route::post('/editincomp', 'TaskmanageController@postEditincomplete');

Route::get('/delcomp/{id?}', 'TaskmanageController@getDeletecomplete');
Route::post('/delcomp', 'TaskmanageController@postDeletecomplete');


Route::get('/delincomp/{id?}', 'TaskmanageController@getDeleteincomplete');
Route::post('/delincomp', 'TaskmanageController@postDeleteincomplete');
