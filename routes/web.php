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

Route::get('/', 'TopController@index');
Route::get('skills', 'SkillsController@index');
Route::get('works', 'WorksController@index');
Route::get('profile', 'ProfileController@index');
Route::get('story', 'StoryController@index');
Route::get('uiux', 'UiController@index');
Route::get('about', 'AboutController@index');
Route::get('/contact', 'ContactController@form');

Route::get('/contact', 'ContactController@form');
Route::post('/contact/confirm', 'ContactController@confirm');
Route::post('/contact/process', 'ContactController@process');

Route::get('/works/nursery', 'NurserySiteController@index'); 
Route::get('/works/careertop', 'CareerSiteController@index'); 
Route::get('/works/careerresult', 'CareerSiteController@result'); 
Route::get('/works/careerdetail', 'CareerSiteController@detail'); 
Route::get('/works/realestate', 'RealEstateSiteController@index'); 
Route::get('/works/cafe', 'CafeSiteController@index');
Route::get('/works/recruit', 'RecruitSiteController@index');
Route::get('/works/music', 'MusicSiteController@index');
