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
//     return view('welcome');
// });
// Route::get('logout', 'ManageController@logout')->name('logout');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function() {
	Route::get('/', 'ManageController@index');
	Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
	Route::resource('users', 'UsersController');
	Route::resource('permissions', 'PermissionsController', ['except'=>'destroy']);
	Route::resource('roles', 'RolesController');
	Route::resource('posts', 'PostController');

	//Academic levels
	Route::get('/academic_level', 'AcademicLevelController@index')->name('manage.academic_level');
	Route::post('/academic_level/store', 'AcademicLevelController@store')->name('manage.academic_level.store');
	Route::get('/academic_level/delete/{level_id}', 'AcademicLevelController@delete')->name('manage.academic_level.delete');
	
	//Deadlines
	Route::get('/deadline', 'DeadlineController@index')->name('manage.deadline');
	Route::post('/deadline/store', 'DeadlineController@store')->name('manage.deadline.store');
	Route::get('/deadline/delete/{level_id}', 'DeadlineController@delete')->name('manage.deadline.delete');
	
	//Categories
	Route::resource('category', 'CategoryController');

	//Level Assign
	Route::get('/levels_assign/update/{updated_id}', 'LevelsAssignController@update')->name('manage.levels_assign.update');
	Route::post('/levels_assign/store/{updated_id}', 'LevelsAssignController@store')->name('manage.levels_assign.store');
	Route::get('/levels_assign/delete/{updated_id}', 'LevelsAssignController@delete')->name('manage.levels_assign.delete');
});
