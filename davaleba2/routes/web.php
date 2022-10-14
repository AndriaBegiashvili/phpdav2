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
    return 'welcome';
});
Route::get('/saxeli', function () {
    return 'andria begiashvili';
});
Route::get('/age', function () {
    return '19';
});
Route::get('/hobby', function () {
    return 'sleeping';
});
Route::get('/car', function () {
    return 'nissan';
});
Route::get('/dog', function () {
    return 'piti';
});
Route::post('/age', function () {
    return '19';
});
Route::match(['get', 'post'], '/post', function () {
    $array = ["message" => "warmatebit ganaxlda"];
    return json_encode($array);
});
Route::match(['get', 'delete'], '/delete', function () {
    $array = ["message" => "warmatebit waishala"];
    return json_encode($array);
});
Route::match(['get', 'put'], '/delete', function () {
    $array = ["message" => "warmatebit daemata"];
    return json_encode($array);
});