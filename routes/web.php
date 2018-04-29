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



Auth::routes();

Route::get('/home','HomeController@index')->name('admin_home');
Route::get('/','IndexController@index');

//Admin middleware za zabranu pristupa odredenim rutama
Route::group(['middleware' => ['auth', 'admin']], function() {

    $routes = [
        'users' => 'UserController',
        'teams' => 'TeamController',

    ];

    foreach ($routes as $key => $value) {


        Route::get('/' . $key, $value . '@index')->name($key); // Retrieve all data from table
        Route::get('/' . $key . '/{id}', $value . '@show')->where('id', '[0-9]+'); // Retrieve user which corresponds to passed ID
//Create
        Route::get('/' . $key . '/create', $value . '@create')->name($key . '_create');
        Route::post('/' . $key . '/create', $value . '@store');
//Update
        Route::get('/' . $key . '/edit')->name($key . '_edit');
        Route::get('/' . $key . '/edit/{id}', $value . '@edit');
        Route::patch('/' . $key . '/edit/{id}', $value . '@update');
//Destroy
        Route::get('/' . $key . '/delete')->name($key . '_delete');
        Route::get('/' . $key . '/delete/{id}', $value . '@destroy');
    }

});

// contact routes

Route:: get('/contact','IndexController@getContact');
Route:: post('/contact','IndexController@postContact');

Route::get('/team/ucreate', 'TeamController@userCreate')->name('team_ucreate');
Route::post('/team/ucreate', 'TeamController@userStore');

Route::get('/team/uedit')->name('team_uedit');
Route::get('/team/uedit/{id}','TeamController@userEdit');
Route::patch('/team/uedit/{id}', 'TeamController@userUpdate');

Route::get('/user/uedit')->name('user_uedit');
Route::get('/user/uedit/{id}','UserController@userEdit');
Route::patch('/user/uedit/{id}', 'UserController@userUpdate');