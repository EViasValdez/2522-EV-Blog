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

Route::get('/sitiowebinicio', function () {
    return view('blog.sitiowebinicio');
})->name('sitiowebinicio');

Route::get('/sitiowebact', function () {
    return view('blog.sitiowebact');
})->name('sitiowebact');

Route::get('/sitiowebenlaces', function () {
    return view('blog.sitiowebenlaces');
})->name('sitiowebenlaces');

Route::get('/ejercicio1', function () {
    return view('archivos.ejercicio1');
})-name('ejercicio1');

Route::get('/ejercicio2', function () {
    return view('archivos.ejercicio2');
})-name('ejercicio2');