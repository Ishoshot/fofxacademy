<?php
use App\Http\Controllers\CohortController;

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

// INDEX ROUTES
Route::get('/home', 'PagesController@index');
Route::get('/cohorts', 'CohortController@index');
Route::get('/pairs', 'PairsController@index');
Route::get('/students', 'StudentsController@index');
Route::get('/topics', 'TopicsController@index');

// CREATE ROUTES
Route::post('/cohorts', 'CohortController@store');

Route::post('/changeStatus', 'CohortController@changeStatus');

Route::post('topics', 'TopicsController@store');

