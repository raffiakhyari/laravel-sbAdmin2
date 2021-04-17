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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('halaman1', function () {
    return view ('halaman1');
})-> middleware(['auth'])->name('halaman1');

Route::get('halaman2', function () {
    return view ('halaman2');
})-> middleware(['auth'])->name('halaman2');

Route::get('halaman3', function () {
    return view ('halaman3');
})-> middleware(['auth'])->name('halaman3');

Route::get('halaman4', function () {
    return view ('halaman4');
})-> middleware(['auth'])->name('halaman4');


require __DIR__.'/auth.php';
