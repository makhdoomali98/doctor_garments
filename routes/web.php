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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('admin/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('manage_raw_material', 'RawMaterialController@index')->name('manage_raw_material');
Route::get('manage_inventory' , 'InventoryController@index')->name('manage_inventory');
Route::get('order_list' , 'OrderController@index')->name('order_list');

