<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

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
//Projects Routes
//Route::resource('Projects', ProjectsController::class);
Route::get('/project', [ProjectsController::class,'index']);
//Route::get('/project','ProjectsController@index');
//
Route::post('/project',[ProjectsController::class,'store']);
//Projects Routes
//Route::post('/project',function (){
//    \App\Models\Project::create(request(['title','description']));
//});
//
//Route::get('/project',function () {
//    $projects = \App\Models\Project::all();
//    return view('projects',compact('projects'));
//});
