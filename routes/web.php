<?php


use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AgamaController;
=======
use App\Http\Controllers\agamaController;
>>>>>>> origin/dev_rosii
use App\Http\Controllers\LoginController;
use App\Http\Controllers\rentlogcontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\StatusController;

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
<<<<<<< HEAD

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

Route::get('/agama', function () {
    return view('agama');
});
=======
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

>>>>>>> origin/dev_rosii

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('agama', [rentlogcontroller::class, 'agama']);
Route::get('periode', [rentlogcontroller::class, 'periode']);
Route::get('unit', [rentlogcontroller::class, 'unit']);
Route::get('sistem', [rentlogcontroller::class, 'sistem']);
Route::get('status', [rentlogcontroller::class, 'status']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

<<<<<<< HEAD
Route::post('/logout', [LoginController::class, 'logout']);





// Route::get('/agama', [ReferensiController::class, 'agama'])->middleware('auth');
Route::get('/periode', [ReferensiController::class, 'periode'])->middleware('auth');
Route::get('/unit', [ReferensiController::class, 'unit'])->middleware('auth');
Route::get('/sistem', [ReferensiController::class, 'sistem'])->middleware('auth');
Route::get('/status', [ReferensiController::class, 'status'])->middleware('auth');

/**
 * CRUD hlmn agama
 * pakai query builder
 */
Route::get('/agama/tampil', [AgamaController::class, 'index'])->middleware('auth');
// create data
// menuju ke form tambah data
Route::get('/agama/tampil', [AgamaController::class,'create'])->middleware('auth');

// masukkan data ke db
Route::post('/agama/tampil',[AgamaController::class, 'store'])->middleware('auth');

// read data
Route::get('/agama',[AgamaController::class,'tampil'])->middleware('auth');

// detail data berdasarkan id param
Route::get('/agama/{id}',[AgamaController::class,'show'])->middleware('auth');

// edit data
Route::get('/agama{id}/edit', [AgamaController::class,'edit'])->middleware('auth');

// update data di db berdasarkan id

Route::put('/agama/{id}', [AgamaController::class,'update'])->middleware('auth');

// delete data
Route::delete('/agama/{id}', [AgamaController::class,'destroy'])->middleware('auth');
// Route::resource('agama',AgamaController::class)->middleware('auth');



/**
 * CRUD HLMN STATUS
 */
// Route::resource('status', StatusController::class)->middleware('auth');
// Route::get('/status/tampil', [StatusController::class, 'index'])->middleware('auth');
// create data
// menuju ke form tambah data
Route::get('/status/tampil', [StatusController::class,'create'])->middleware('auth');

// masukkan data ke db
Route::post('/status/tampil',[StatusController::class, 'store'])->middleware('auth');

// read data
Route::get('/status',[StatusController::class,'tampil'])->middleware('auth');

// detail data berdasarkan id param
Route::get('/status/{status}',[StatusController::class,'show'])->middleware('auth');

// edit data
Route::get('/status{status}/edit', [StatusController::class,'edit'])->middleware('auth');

// update data di db berdasarkan id

Route::put('/status/{status}', [StatusController::class,'update'])->middleware('auth');

// delete data
Route::delete('/status/{status}', [StatusController::class,'destroy'])->middleware('auth');
// Route::resource('agama',AgamaController::class)->middleware('auth');
 
=======
Route::get('agama', [agamaController::class, 'index']);
Route::get('add-agama', [agamaController::class, 'add']);
Route::post('add-agama', [agamaController::class, 'store']);
Route::get('edit-agama/{slug}', [agamaController::class, 'edit']);
Route::put('edit-agama/{slug}', [agamaController::class, 'update']);
Route::get('delete-agama/{slug}', [agamaController::class, 'delete']);
Route::get('destroy-agama/{slug}', [agamaController::class, 'destroy']);

Route::post('/logout', [LoginController::class, 'logout']);
>>>>>>> origin/dev_rosii
