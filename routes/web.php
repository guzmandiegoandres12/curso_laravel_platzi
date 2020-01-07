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
Route::resource('/expense_reports','ExpenseReporrtControler');
Route::get('/expense_reports/{id}/confirmDelete','ExpenseReporrtControler@confirmDelete');

Route::get('/expense_reports/{id}/confirmSendEmail','ExpenseReporrtControler@confirmSendEmail');
Route::post('/expense_reports/{id}/sendEmail','ExpenseReporrtControler@sendEmail');

Route::get('/expense_reports/{expense_report}/expenses/create','ExpenseControler@create');
Route::post('/expense_reports/{expense_report}/expenses','ExpenseControler@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
