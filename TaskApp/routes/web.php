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
// //////using web.php//////
// Route::get('/about',function(){
//     return view('aboutus');
// });
// //////using controller//////
// Route::get('/contact','PageController@indexcontactus');
Route::get('/tasks',function(){
    $data=App\Task::all();
    return view('tasks')->with('tasks',$data);
});
Route::post('/saveTask','TaskController@store');

Route::get('/markascompleted/{id}','TaskController@UpdateTaskAsCompleted');
Route::get('/markasnotcompleted/{id}','TaskController@UpdateTaskAsNotCompleted');
Route::get('/deletetask/{id}','TaskController@DeleteTask');
Route::get('/updatetask/{id}','TaskController@UpdateTaskView');
Route::post('/updatetasknow','TaskController@updatetask');