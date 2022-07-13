<?php

use App\Models\Post;
use App\Models\Daftardosen;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\AuthorCollection;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\DaftardosenController;

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
//     return  view('home', [
//         "title" => "Home"
//     ]);
// });

// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About",
//         "name" => "Nasruddin Dev",
//         "email" => "nasruddindev@gmail.com",
//         "image" => "ND.png"
//     ]);
// });

Route::get('/tentang', function () {
    return  view('frontend.tentang', [
        "title" => "Tentang"
    ]);
});


Route::get('/notfont', [DaftardosenController::class, 'notfont']);

Route::get('/daftardosen', [DaftardosenController::class, 'daftardosen']);
Route::get('/detailberita{id}', [DaftardosenController::class, 'detailberita']);

Route::get('/saibarmenu', [DaftardosenController::class, 'saibarmenu']);
Route::get('/berita', [DaftardosenController::class, 'berita']);

Route::get('/contact', [DaftardosenController::class, 'contact']);
Route::get('/strukturorgan', [DaftardosenController::class, 'strukturorgan']);

Route::get('/kurikulum', [DaftardosenController::class, 'kurikulum']);
Route::get('/galery', [DaftardosenController::class, 'galery']);
Route::get('/kelakademik', [DaftardosenController::class, 'kelakademik']);
Route::get('/akreditas', [DaftardosenController::class, 'akreditas']);

//utama
Route::get('/', [DaftardosenController::class, 'index']);
//brita
Route::get('/detailberita/{id}', [DaftardosenController::class, 'edit']);
Route::post('/detailberita/{id}/update', [DaftardosenController::class, 'update']);


// crud berita
Route::get('/mahasiswa', [CrudController::class, 'index']);
Route::get('/mahasiswa/create', [CrudController::class, 'create']);
Route::post('/mahasiswa/store', [CrudController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [CrudController::class, 'edit']);
Route::post('/mahasiswa/{id}/update', [CrudController::class, 'update']);
Route::get('/mahasiswa/{id}/delete', [CrudController::class, 'destroy']);
Route::get('/berita/search', [CrudController::class, 'search']);

// crud Dosen
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/create', [DosenController::class, 'create']);
Route::post('/dosen/store', [DosenController::class, 'store']);
Route::get('/dosen/{id}/edit', [DosenController::class, 'edit']);
Route::post('/dosen/{id}/update', [DosenController::class, 'update']);
Route::get('/dosen/{id}/delete', [DosenController::class, 'destroy']);
Route::get('/berita/search', [DosenController::class, 'search']);


// semester 
Route::get('/semester', [SemesterController::class, 'index']);
Route::get('/dua', [SemesterController::class, 'dua']);
Route::get('/tiga', [SemesterController::class, 'tiga']);
Route::get('/empat', [SemesterController::class, 'empat']);
Route::get('/lima', [SemesterController::class, 'lima']);
Route::get('/enam', [SemesterController::class, 'enam']);
Route::get('/tujuh', [SemesterController::class, 'tujuh']);
Route::get('/delapan', [SemesterController::class, 'delapan']);

// dash
// login
// Route::get('/register', [AuthorCollection::class, 'register']);
// Route::post('/register', [AuthorCollection::class, 'store']);
Route::get('/login', [AuthorCollection::class, 'login']);
Route::post('/login', [AuthorCollection::class, 'authenticate']);

// admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');