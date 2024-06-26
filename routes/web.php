<?php

use App\Http\Controllers\Admin\AnjabController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DokterController;
use App\Http\Controllers\Admin\JadwalDokterController;
use App\Http\Controllers\Admin\StrukturalController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\GambarSliderController;
use App\Http\Controllers\Admin\GambarTemaController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TentangKamiController;
use App\Models\SikDokter;
use App\Models\SikJadwalDokter;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingpageController::class, 'utama']);
Route::get('/berita', [LandingpageController::class, 'berita']);
Route::get('/berita/{slug}', [LandingpageController::class, 'beritaDetail']);
Route::get('/kontak', [LandingpageController::class, 'kontak']);

Route::get('/profil', [TentangKamiController::class, 'profil']);
Route::get('/visi-misi', [TentangKamiController::class, 'visiMisi']);
Route::get('/struktural', [TentangKamiController::class, 'struktural']);

Route::get('/informasi-layanan', [LayananController::class, 'informasiLayanan']);
Route::get('/jadwal-dokter', [LayananController::class, 'jadwalDokter']);
Route::get('/jadwal-dokter/{poli}', [LayananController::class, 'jadwalDokterPoli']);
Route::get('/dokter', [LayananController::class, 'dokter']);
Route::get('/booking', [LayananController::class, 'booking']);
Route::get('/booking/{no_booking}', [LayananController::class, 'Detailbooking']);
Route::post('/booking', [LayananController::class, 'Postbooking']);
Route::get('/booking/{no_booking}/pdf', [LayananController::class, 'PdfBooking']);
Route::get('/reload-captcha', [LayananController::class, 'reloadCaptcha']);

Route::resource('pengaduan', PengaduanController::class)->only('store');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [AuthController::class, 'dashboard']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::put('/profile', [AuthController::class, 'profileUpdate']);

    Route::resource('categories', CategoryController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('users', UserController::class)->middleware('is_superadmin');
    Route::resource('strukturals', StrukturalController::class);

    Route::resource('dokter', DokterController::class);
    Route::resource('jadwal-dokter', JadwalDokterController::class);

    Route::resource('anjab', AnjabController::class);

    Route::resource('gambar-slider', GambarSliderController::class)->only('index', 'store', 'destroy');
    Route::resource('gambar-hero', GambarTemaController::class)->only('index', 'store');
    Route::resource('pengaduan', PengaduanController::class)->only('index', 'destroy');
});
