<?php

use App\Http\Controllers\AbsenGuruController;
use App\Http\Controllers\AbsenSiswaController;
use App\Http\Controllers\DisabilitasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeDashboard;
use App\Http\Controllers\HomeExtrakulikulerController;
use App\Http\Controllers\HomeFasilitasController;
use App\Http\Controllers\HomeFeedbackController;
use App\Http\Controllers\HomeInformasiController;
use App\Http\Controllers\HomePrestasiController;
use App\Http\Controllers\HomeGaleriController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JadwalPelajaranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\SikapController;
use App\Models\Home_Feedback;
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

Route::get('/', [IndexController::class,'index']);
Route::get('/profil', [IndexController::class,'profil']);
Route::get('/guru', [IndexController::class,'guru']);
Route::get('/fasilitas', [IndexController::class,'fasilitas']);
Route::get('/extrakulikuler', [IndexController::class,'extrakulikuler']);
Route::get('/prestasi', [IndexController::class,'prestasi']);
Route::get('/kontak', [IndexController::class,'kontak']);
Route::get('/galeri', [IndexController::class,'galeri']);
Route::get('/galeri/{id}', [IndexController::class,'galeriDetail']);
Route::get('/tentang', [IndexController::class,'tentang']);
Route::get('/siswa', [IndexController::class,'siswa']);
Route::get('/pendaftaran', [IndexController::class,'pendaftaran']);
Route::get('/orangtua_login', [IndexController::class,'orangtua_login']);
Route::get('/orangtua_logout', [LoginController::class,'actionlogoutOrangtuas']);

Route::post('/orangtua_login_auth', [LoginController::class,'actionloginOrangtuas']);
Route::get('/orangtua_home', [IndexController::class,'orangtua_home']);
Route::get('/orangtua_home/{sem}', [IndexController::class,'orangtua_homes']);







Route::post('/kontak/kirim', [HomeFeedbackController::class,'store']);






Route::get('/login', [LoginController::class,'index']);
Route::post('/login/auth', [LoginController::class,'actionlogin']);
Route::get('/logout', [LoginController::class,'actionlogout']);



Route::get('/profil_dasbor', [HomeDashboard::class,'index']);

Route::get('/profil_informasi',[HomeInformasiController::class,'index']);
Route::post('/profil_informasi/update',[HomeInformasiController::class,'update']);

// Extrakulikuler
Route::get('/profil_extrakulikuler',[HomeExtrakulikulerController::class,'index']);
Route::post('/profil_extrakulikuler/store',[HomeExtrakulikulerController::class,'store']);
Route::get('/profil_extrakulikuler/destroy/{id}',[HomeExtrakulikulerController::class,'destroy']);

// Fasilitas
Route::get('/profil_fasilitas',[HomeFasilitasController::class,'index']);
Route::post('/profil_fasilitas/store',[HomeFasilitasController::class,'store']);
Route::get('/profil_fasilitas/destroy/{id}',[HomeFasilitasController::class,'destroy']);

// Prestasi
Route::get('/profil_prestasi',[HomePrestasiController::class,'index']);
Route::post('/profil_prestasi/store',[HomePrestasiController::class,'store']);
Route::get('/profil_prestasi/destroy/{id}',[HomePrestasiController::class,'destroy']);

// Galeri
Route::get('/profil_galeri',[HomeGaleriController::class,'index']);
Route::post('/profil_galeri/store',[HomeGaleriController::class,'store']);
Route::get('/profil_galeri/destroy/{id}',[HomeGaleriController::class,'destroy']);

// Data Siswa
Route::get('/data_siswa',[SiswaController::class,'index']);
Route::post('/data_siswa/store',[SiswaController::class,'store']);
Route::get('/data_siswa/destroy/{id}',[SiswaController::class,'destroy']);

// Data Guru
Route::get('/data_guru',[GuruController::class,'index']);
Route::post('/data_guru/store',[GuruController::class,'store']);
Route::get('/data_guru/destroy/{id}',[GuruController::class,'destroy']);
Route::get('/data_guru/adduser/{id}',[GuruController::class,'adduser']);


// Data Disabilitas
Route::get('/data_disabilitas',[DisabilitasController::class,'index']);
Route::post('/data_disabilitas/store',[DisabilitasController::class,'store']);
Route::get('/data_disabilitas/destroy/{id}',[DisabilitasController::class,'destroy']);

// Data Pelajaran
Route::get('/data_pelajaran',[PelajaranController::class,'index']);
Route::post('/data_pelajaran/store',[PelajaranController::class,'store']);
Route::get('/data_pelajaran/destroy/{id}',[PelajaranController::class,'destroy']);


// Data Jadwal Pelajaran
Route::get('/data_jadwal_pelajaran',[JadwalPelajaranController::class,'index']);
Route::post('/data_jadwal_pelajaran/tambahjadwal',[JadwalPelajaranController::class,'tambahjadwal']);
Route::get('/data_jadwal_pelajaran/destroy/{id}',[JadwalPelajaranController::class,'destroy']);
Route::get('/data_jadwal_pelajaran/{kelas}',[JadwalPelajaranController::class,'jadwalDetail']);


Route::get('/data_kelas',[KelasController::class,'index']);
Route::post('/data_kelas/store',[KelasController::class,'store']);
Route::get('/data_kelas/{kelas}',[KelasController::class,'kelasDetail']);
Route::post('/data_kelas/gantiwali',[KelasController::class,'gantiwali']);


Route::get('/kelola_kelas',[KelasController::class,'index']);
// Route::get('/data_kelas/{disabilitas}/{kelas}',[SiswaController::class,'kelasDetail']);
// Route::post('/data_kelas/gantiwali',[SiswaController::class,'gantiwali']);



// Absen Siswa
Route::get('/absen_siswa',[AbsenSiswaController::class,'index']);
Route::post('/absen_siswa/store',[AbsenSiswaController::class,'store']);

// Absen Guru
Route::get('/absen_guru',[AbsenGuruController::class,'index']);
Route::post('/absen_guru/store',[AbsenGuruController::class,'store']);


// Nilai Siswa
Route::get('/nilai_siswa',[NilaiController::class,'index']);
Route::get('/nilai_siswa/{kelas}',[NilaiController::class,'detailKelas']);
Route::get('/nilai_siswa/{kelas}/{nis}/{semester}',[NilaiController::class,'detailNilai']);
Route::post('/nilai_siswa/inputnilai',[NilaiController::class,'store']);

// Sikap Siswa
Route::get('/sikap_siswa',[SikapController::class,'index']);
Route::get('/sikap_siswa/{kelas}',[SikapController::class,'detailKelas']);
Route::get('/sikap_siswa/{kelas}/{nis}/{semester}',[SikapController::class,'detailNilai']);
Route::post('/sikap_siswa/inputnilai',[SikapController::class,'store']);


// Data Orangtua
Route::get('/data_orangtua',[OrangtuaController::class,'index']);
Route::post('/data_orangtua/store',[OrangtuaController::class,'store']);
Route::get('/data_orangtua/destroy/{id}',[OrangtuaController::class,'destroy']);