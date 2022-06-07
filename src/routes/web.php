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


$Router = app()->make('Illuminate\Routing\Router');
$Router->get('/', fn() => dd('good'));
$Router->get('/test', [\App\Http\MyApp\Controller\MyAppController::class, 'index'])->name('test_index');
$Router->get('/redis', [\App\Http\MyApp\Controller\MyAppController::class, 'redis'])->name('redis');
