<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Admin\AdminCarController;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

        Route::resource('admin-cars', AdminCarController::class);

});





Route::get('/contact')->name('send-book');

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');



