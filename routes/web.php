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

Route::get('/dashboard/halaman1', function () {
    return view ('dashboardPage.halaman1');
})-> middleware(['auth'])->name('halaman1');

Route::get('/dashboard/halaman2', function () {
    return view ('dashboardPage.halaman2');
})-> middleware(['auth'])->name('halaman2');

Route::get('/dashboard/halaman3', function () {
    return view ('dashboardPage.halaman3');
})-> middleware(['auth'])->name('halaman3');

Route::get('/dashboard/halaman4', function () {
    return view ('dashboardPage.halaman4');
})-> middleware(['auth'])->name('halaman4');


require __DIR__.'/auth.php';
