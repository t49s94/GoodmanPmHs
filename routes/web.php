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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact-us/create', 'MessagesController@create');
Route::post('/contact-us/store', 'MessagesController@store');
Route::get('/contact-us/success', 'MessagesController@success');

Route::get('/services/index', 'ServicesController@index');

Route::get('/employees/team', 'EmployeesController@team');

Route::get('/testimonials', ['before' => 'force.ssl'], 'TestimonialsController@displayableTestimonials')->name('testimonials');
Route::get('/testimonials/index', 'TestimonialsController@index');
