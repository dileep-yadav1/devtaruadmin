<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


Route::get('/user',[UserController::class,'index']);
Route::get('delete/{id}',[UserController::class,'delete']);
Route::get('edit/{id}',[UserController::class,'edituser']);
Route::post('edit',[UserController::class,'update']);

Route::get('/add_user',[UserController::class,'adduser']);
Route::Post('/create_user',[UserController::class,'insert']);
});




