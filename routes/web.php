<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GirlController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SkillController;

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

// use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

// Backend section start
Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function() {
    Route::get('/','AdminController@index')->name('admin');

    // Routes for Users
    Route::resource('/users', 'UsersController');

    // Routes for Roles
    Route::resource('/roles', 'UserRoleController');

    Route::resource('girls', GirlController::class);
    Route::resource('events', EventController::class);
    Route::resource('progresses', ProgressController::class);
    Route::resource('materials', MaterialController::class);
    Route::resource('skills', SkillController::class);

});