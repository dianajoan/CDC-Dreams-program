<?php

use Illuminate\Support\Facades\Route;

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


// Frontend Routes

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'FrontendController@index');

Route::get('/','FrontendController@home')->name('home');

// Girl
Route::get('/girl','FrontendController@girl')->name('girl');
Route::get('/girl-detail/{slug}','FrontendController@girlDetail')->name('girl.detail');

// Event
Route::get('/event','FrontendController@event')->name('event');
Route::get('/event-detail/{slug}','FrontendController@eventDetail')->name('event.detail');

// Progress
Route::get('/progress','FrontendController@progress')->name('progress');
Route::get('/progress-detail/{slug}','FrontendController@progressDetail')->name('progress.detail');

// Material
Route::get('/material','FrontendController@material')->name('material');
Route::get('/material-detail/{slug}','FrontendController@materialDetail')->name('material.detail');


// Skill
Route::get('/skill','FrontendController@skill')->name('skill');
Route::get('/skill-detail/{slug}','FrontendController@skillDetail')->name('skill.detail');

// Backend section start
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {
    Route::get('/', 'AdminController@index')->name('admin');

    // Routes for Users
    Route::resource('users', 'UsersController');

    // Banner
    Route::resource('banner', 'BannerController');

    // Girls
    Route::resource('girls', 'GirlController');

    // Events
    Route::resource('events', 'EventController');

    // Progresses
    Route::resource('progresses', 'ProgressController');

    // Materials
    Route::resource('materials', 'MaterialController');

    // Skills
    Route::resource('skills', 'SkillController');

    // Reports
    Route::get('reports', 'ReportsController@index')->name('reports');


});
