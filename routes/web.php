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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/apropos', 'HomeController@about')->name('about');
Route::get('/conventions', 'HomeController@convention')->name('conventions');

/*Route::get('/dashboard', function () {
    return view('admin.dashboard');
});*/



/*Route::get('/abd/login', function () {
    return view('admin.user.login');
});*/

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    

    
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', 'AdminController@index')->name('dashboard');

        Route::get('/students','StudentController@index')->name('students.list');
        Route::get('/students/add','StudentController@create')->name('students.create');
        Route::get('/students/{student}/edit','StudentController@edit')->name('students.edit');
        Route::post('/students','StudentController@store')->name('students.store');

        Route::get('/formations','FormationController@index')->name('formations.list');
        Route::get('/formations/add','FormationController@create')->name('formations.create');
        Route::post('/formations','FormationController@store')->name('formations.store');

        Route::post('/students/{student}/edit/delFormation','StudentController@removeFormation')->name('students.removeformation');
        Route::post('/students/{student}/edit/upload','StudentController@changeimage')->name('students.upload');
        Route::post('/students/{student}/edit/addFormation','StudentController@addformation')->name('students.addformation');
    });
   
});
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/formations', 'FormationController@listing')->name('formations');

Route::get('/inscription', 'StudentController@inscription')->name('inscription');
Route::post('/inscription', 'StudentController@registration')->name('registration');

Route::get('/search/{student?}', 'StudentController@search')->name('search');
//Route::post('/search', 'StudentController@registration')->name('registration');



