<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SearchController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/artists', [HomeController::class, 'artists'])->name('artists');
Route::get('/albums', [HomeController::class, 'albums'])->name('albums');
Route::get('/stations', [HomeController::class, 'stations'])->name('stations');
Route::get('/music', [HomeController::class, 'music'])->name('music');
Route::get('/downloads', [HomeController::class, 'downloads'])->name('downloads');
Route::get('/purchased', [HomeController::class, 'purchased'])->name('purchased');
Route::get('/favourites', [HomeController::class, 'favourites'])->name('favourites');
Route::get('/search', [HomeController::class, 'searchMusic'])->name('search');
//Route::get('/fetch-song-data', [HomeController::class,'fetchSongData'])->name('fetchsongdata');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');


    Route::get('/add-music',[SearchController::class,'add'])->name('add.music');
    Route::post('/create-music',[SearchController::class,'create'])->name('create.music');
    Route::get('/manage-music',[SearchController::class,'manage'])->name('manage.music');
    Route::get('/edit-music/{id}',[SearchController::class,'edit'])->name('edit.music');
    Route::post('/update-music/{id}',[SearchController::class,'update'])->name('update.music');
    Route::get('/delete-music/{id}',[SearchController::class,'delete'])->name('delete.music');


//    Route::get('/fetch-song-data', [SearchController::class,'fetchSongData'])->name('fetchsongdata');




});
