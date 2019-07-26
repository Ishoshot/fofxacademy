<?php
use App\Http\Controllers\CohortController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PairsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TopicsController;
use App\Http\Controllers\RegisterController;






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


Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

// INDEX ROUTES
Route::get('/home', 'PagesController@index');
Route::get('/cohorts', 'CohortController@index');
Route::get('/pairs', 'PairsController@index');
Route::get('/students', 'StudentsController@index');
Route::get('/topics', 'TopicsController@index');

// STORAGE ROUTES
Route::post('/cohorts', 'CohortController@store');

Route::get('/changeStatus', 'CohortController@changeStatus');

Route::post('/topics', 'TopicsController@store');

Route::post('/students', 'StudentsController@store');
Route::post('/pairs', 'PairsController@store');

// DELETE ROUTES
Route::delete('cohorts/{id}', 'CohortController@destroy')->name('cohort.destroy');
Route::delete('topics/{id}', 'TopicsController@destroy')->name('topics.destroy');
Route::delete('students/{id}', 'StudentsController@destroy')->name('students.destroy');
Route::delete('pairs/{id}', 'PairsController@destroy')->name('pairs.destroy');

