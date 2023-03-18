<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\table_herosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/example', function (){
    $page_title = "example";
    return view('example', compact('page_title'));
})->name('example');

Route::get('/heros', [table_herosController::class, 'index'])->name('heros');
Route::get('/heros_women', [table_herosController::class, 'index_woman'])->name('heros_women');
Route::get('/heros_men', [table_herosController::class, 'index_man'])->name('heros_men');