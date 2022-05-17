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

$Router = app()->make('Illuminate\Routing\Router');
$Router->get('/test', [\App\Http\MyApp\Controller\MyAppController::class, 'index'])->name('test_index');
