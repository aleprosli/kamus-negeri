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

Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/perkataan-kamus/index', [App\Http\Controllers\Admin\PerkataanKamusController::class, 'index'])->name('perkataan_kamus:index');
Route::get('/perkataan-kamus/create', [App\Http\Controllers\Admin\PerkataanKamusController::class, 'create'])->name('perkataan_kamus:create');
Route::get('/perkataan-kamus/edit/{perkataan}', [App\Http\Controllers\Admin\PerkataanKamusController::class, 'edit'])->name('perkataan_kamus:edit');
Route::post('/perkataan-kamus/store', [App\Http\Controllers\Admin\PerkataanKamusController::class, 'store'])->name('perkataan_kamus:store');
Route::post('/perkataan-kamus/update/{perkataan}', [App\Http\Controllers\Admin\PerkataanKamusController::class, 'update'])->name('perkataan_kamus:update');
Route::get('/perkataan-kamus/delete/{perkataan}', [App\Http\Controllers\Admin\PerkataanKamusController::class, 'destroy'])->name('perkataan_kamus:destroy');
