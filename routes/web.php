<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\sistemController;
use App\Http\Controllers\rentlogcontroller;
use App\Http\Controllers\CategoryController;
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
});
Route::get('/dosen', function () {
    return view('dosen');
});
Route::get('/kelas', function () {
    return view('kelas');
});
Route::get('/krs', function () {
    return view('krs');
});
Route::get('/matkul', function () {
    return view('matkul');
});
Route::get('/semester', function () {
    return view('semester');
});
Route::get('/sistem', function () {
    return view('sistem');
});
Route::get('/agama', function () {
    return view('agama');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('agama', [rentlogcontroller::class, 'agama']);
Route::get('periode', [rentlogcontroller::class, 'periode']);
Route::get('unit', [rentlogcontroller::class, 'unit']);
Route::get('sistem', [rentlogcontroller::class, 'sistem']);
Route::get('status', [rentlogcontroller::class, 'status']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/category', [CategoryController::class, 'index']);
// Route::get('category-add', [CategoryController::class, 'add']);
// Route::post('category-add', [CategoryController::class, 'store']);
// Route::get('category-edit/{slug}', [CategoryController::class, 'edit']);
// Route::put('category-edit/{slug}', [CategoryController::class, 'update']);
// Route::get('category-delete/{slug}', [CategoryController::class, 'delete']);
// Route::get('category-destroy/{slug}',[CategoryController::class, 'destroy']);
// Route::get('category-deleted', [CategoryController::class, 'deletedcategory']);
// Route::get('category-restore/{slug}', [CategoryController::class, 'restore']);
