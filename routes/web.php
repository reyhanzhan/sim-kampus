<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\agamaController;
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
});
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
Route::get('/agama', function () {
     return view('agama');
})->middleware('auth');
Route::get('/periode', function () {
    return view('periode');
})->middleware('auth');
Route::get('/unit', function () {
    return view('unit');
})->middleware('auth');
Route::get('/sistemkuliah', function () {
    return view('sistemkuliah');
})->middleware('auth');
Route::get('/statusmahasiswa', function () {
    return view('statusmahasiswa');
})->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('agama', [agamaController::class, 'index']);
Route::get('add-agama', [agamaController::class, 'add']);
Route::post('add-agama', [agamaController::class, 'store']);
Route::get('edit-agama/{slug}', [agamaController::class, 'edit']);
Route::put('edit-agama/{slug}', [agamaController::class, 'update']);
Route::get('delete-agama/{slug}', [agamaController::class, 'delete']);
Route::get('destroy-agama/{slug}', [agamaController::class, 'destroy']);

Route::post('/logout', [LoginController::class, 'logout']);