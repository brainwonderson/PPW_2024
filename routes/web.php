<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BEMController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Departemen\SarprasController;
use App\Http\Controllers\Departemen\DhpmController;
use App\Http\Controllers\Departemen\DiptekController;
use App\Http\Controllers\Departemen\DpdkController;
use App\Http\Controllers\Departemen\DepolController;
use App\Http\Controllers\Departemen\DepkominfoController;
use App\Http\Controllers\Departemen\DepkebdisController;
use App\Http\Controllers\Departemen\DepsenbudController;
use App\Http\Controllers\Departemen\DepagsosController;

Route::middleware('auth')->post('/vote/{candidateId}', [VoteController::class, 'vote']);

Route::get('/', [HomeController::class, 'tes'])->name('home');
Route::get('/vote', [HomeController::class, 'vote'])->name('vote')->middleware('auth');
Route::get('/register', [AuthManager::class, 'register'])->name('register'); 
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post'); 
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post'); 
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/about', function () {
    return view('menu/aboutus');
})->name('about');

// Route::get('/admin', function () {
//     return view('admin/admin');
// })->name('admin');

Route::get('/content', function () {
    return view('Departcontent');
})->name('departcontent');

Route::get('/creator', function () {
    return view('content');
})->name('creatorcontent');

Route::get('/try', function () {
    return view('try');
})->name('try');

Route::get('/test', function () {
    return view('test');
})->name('test');

// Route::get('/basket', function () {
//     return view('ukm/basket');
// })->name('basket');

Route::get('/basket', [App\Http\Controllers\Api\UKMController::class, 'index'])->name('basket');

Route::get('/GDSC', function () {
    return view('ukm/GDSC');
})->name('GDSC');

Route::get('/Gitar', function () {
    return view('ukm/Gitar');
})->name('Gitar');

Route::get('/Psm', function () {
    return view('ukm/Psm');
})->name('Psm');

Route::get('/English', function () {
    return view('ukm/English');
})->name('English');

Route::get('/3DC', function () {
    return view('ukm/3DC');
})->name('3DC');

route::get('/diptek', [DiptekController::class, 'index'])->name('diptek');
route::get('/sarpras', [SarprasController::class, 'index'])->name('sarpras');
route::get('/dpdk', [DpdkController::class, 'index'])->name('dpdk');
route::get('/depol', [DepolController::class, 'index'])->name('depol');
route::get('/depkominfo', [DepkominfoController::class, 'index'])->name('depkominfo');
route::get('/depkebdis', [DepkebdisController::class, 'index'])->name('depkebdis');
route::get('/depsenbud', [DepsenbudController::class, 'index'])->name('depsenbud');
route::get('/depagsos', [DepagsosController::class, 'index'])->name('depagsos');
route::get('/dhpm', [DhpmController::class, 'index'])->name('dhpm');

route::get('/admin', [BEMController::class, 'admin'])->name('admin');

route::get('/vote_admin', [BEMController::class, 'vote'])->name('vote');

route::get('/tambahdata-keanggotaan', [BEMController::class, 'tambahdatakeanggotaan'])->name('tambahdata-keanggotaan');

route::get('/tambahdata-departemen', [BEMController::class, 'tambahdatadepartemen'])->name('tambahdata-departemen');

route::get('/tambahdata-ukm', [BEMController::class, 'tambahdataukm'])->name('tambahdata-ukm');

route::get('/tambahdata-vote', [BEMController::class, 'tambahdatavote'])->name('tambahdata-vote');

route::post('/insertkeanggotaan', [BEMController::class, 'insertdatakeanggotaan'])->name('insertkeanggotaan');

route::post('/insertdepartemen', [BEMController::class, 'insertdatadepartemen'])->name('insertdepartemen');

route::post('/insertukm', [BEMController::class, 'insertukm'])->name('insertukm');

route::post('/insertvote', [BEMController::class, 'insertdatavote'])->name('insertvote');

route::get('/keanggotaan', [BEMController::class, 'keanggotaan'])->name('keanggotaan');

route::get('/departemen', [BEMController::class, 'departemen'])->name('departemen');

route::get('/ukm', [BEMController::class, 'ukm'])->name('ukm');

route::get('/tampilkandata/{id}', [BEMController::class, 'tampilkandata'])->name('tampilkandata');
route::get('/delete/keanggotaan/{id}', [BEMController::class, 'delete_keanggotaan'])->name('delete');
route::get('/delete/vote/{id}', [BEMController::class, 'delete_vote'])->name('delete');
route::get('/delete/departemen/{id}', [BEMController::class, 'delete_departemen'])->name('delete');
route::get('/delete/ukm/{id}', [BEMController::class, 'delete_ukm'])->name('delete');
route::get('/updatedata/{id}', [BEMController::class, 'updatedata'])->name('updatedata');
route::post('/updatedata/{id}', [BEMController::class, 'updatedata'])->name('updatedata');