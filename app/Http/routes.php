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

#post registering the page to be displayed (THINK)
Route::post('/register', 'Auth\AuthController@postRegister');

#after logout the user should be sent to the home page with a flash
#message of being logged out

Route::get('/logout', 'Auth\AuthController@logout');


#test for checking login status of a user (comment out on production server)
Route::get('/show-login-status', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user) {
        echo 'You are logged in.';
        dump($user->toArray());
    } else {
        echo 'You are not logged in.';
    }

    return;

});
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


#Route::get('/incomplete', function () {
#    return view('page for displaying incomplete tasks');
#});
#Route::get('/complete', function (){
#    return view('page for displaying completed tasks');
#});
#Route::get('/alltasks', function(){
#    return view('page for all tasks in different colors');
#});
#Route::get('/add', function(){
#    return view('page for adding tasks');
#});

#Route::get('/edit', function(){
#    return view('page for editing tasks');
#});


Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
