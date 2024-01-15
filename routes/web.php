<?php


use App\Http\Controllers\ReferensiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
})->middleware('auth');

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
})->middleware('auth');

Route::get('/dosen', function () {
    return view('dosen');
})->middleware('auth');

Route::get('/kelas', function () {
    return view('kelas');
})->middleware('auth');

Route::get('/krs', function () {
    return view('krs');
})->middleware('auth');

Route::get('/matkul', function () {
    return view('matkul');
})->middleware('auth');

Route::get('/semester', function () {
    return view('semester');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);





Route::get('/agama', [ReferensiController::class, 'agama'])->middleware('auth');
Route::get('/periode', [ReferensiController::class, 'periode'])->middleware('auth');
Route::get('/unit', [ReferensiController::class, 'unit'])->middleware('auth');
Route::get('/sistem', [ReferensiController::class, 'sistem'])->middleware('auth');
Route::get('/status', [ReferensiController::class, 'status'])->middleware('auth');

// referensi
// Route::get('/agama', function(){
//     return view('menu.agama');
// })->middleware('auth');

// Route::get('/periode', function(){
//     return view('menu.periode');
// })->middleware('auth');

// Route::get('/unit', function(){
//     return view('menu.unit');
// })->middleware('auth');

// Route::get('/sistem', function(){
//     return view('menu.sistem');
// })->middleware('auth');

// Route::get('/status', function(){
//     return view('menu.status');
// })->middleware('auth');
