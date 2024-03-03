<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
Route::middleware(['auth', 'ceklevel:admin,user'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});



// Route::get('/p', function () {
//     return view('welcome');
// });


Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/postlogin', [LoginController::class, 'authenticate']);
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');


