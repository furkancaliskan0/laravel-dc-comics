<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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


//INDEX
Route::get('/', [MainController::class, 'home'])
    ->name('home');

//SHOW
Route::get('/people/show/{person}', [MainController::class, 'personShow'])
    ->name('person.show');

//DELETE
Route::get('/person/delete/{person}', [MainController::class, 'personDelete'])
    ->name('person.delete');

//CREATE
Route::get('/person/create', [MainController::class, 'personCreate'])
    ->name('person.create');

//STORE
Route::post('/person/store', [MainController::class, 'personStore'])
    ->name('person.store');