<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BEMController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\Auth\LoginController;

Route::middleware('auth')->post('/vote/{candidateId}', [VoteController::class, 'vote']);


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/index', [HomeController::class, 'indexes'])->name('indexes');
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

Route::get('/vote', function () {
    return view('menu/vote');
})->name('vote');

Route::get('/diptek', function () {
    return view('div-BEM/diptek');
})->name('diptek');

Route::get('/depagsos', function () {
    return view('div-BEM/depagsos');
})->name('depagsos');

Route::get('/depkominfo', function () {
    return view('div-BEM/depkominfo');
})->name('depkominfo');

Route::get('/depsenbud', function () {
    return view('div-BEM/depsenbud');
})->name('depsenbud');

Route::get('/depkebdis', function () {
    return view('div-BEM/depkebdis');
})->name('depkebdis');

Route::get('/depol', function () {
    return view('div-BEM/depol');
})->name('depol');

Route::get('/dpdk', function () {
    return view('div-BEM/dpdk');
})->name('dpdk');

Route::get('/dhpm', function () {
    return view('div-BEM/dhpm');
})->name('dhpm');

Route::get('/sarpras', function () {
    return view('div-BEM/sarpras');
})->name('sarpras');

Route::get('/try', function () {
    return view('try');
})->name('try');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/basket', function () {
    return view('ukm/basket');
})->name('basket');


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


route::get('/admin', [BEMController::class, 'admin'])->name('admin');

route::get('/tambahdata-keanggotaan', [BEMController::class, 'tambahdatakeanggotaan'])->name('tambahdata-keanggotaan');

route::get('/tambahdata-departemen', [BEMController::class, 'tambahdatadepartemen'])->name('tambahdata-departemen');

route::get('/tambahdata-ukm', [BEMController::class, 'tambahdataukm'])->name('tambahdata-ukm');

route::post('/insertkeanggotaan', [BEMController::class, 'insertdatakeanggotaan'])->name('insertkeanggotaan');

route::post('/insertdepartemen', [BEMController::class, 'insertdatadepartemen'])->name('insertdepartemen');

route::post('/insertukm', [BEMController::class, 'insertdataukm'])->name('insertukm');

route::get('/keanggotaan', [BEMController::class, 'keanggotaan'])->name('keanggotaan');

route::get('/departemen', [BEMController::class, 'departemen'])->name('departemen');

route::get('/ukm', [BEMController::class, 'ukm'])->name('ukm');

route::get('/tampilkandata/{id}', [BEMController::class, 'tampilkandata'])->name('tampilkandata');
route::get('/delete/{id}', [BEMController::class, 'delete'])->name('delete');
route::get('/updatedata/{id}', [BEMController::class, 'updatedata'])->name('updatedata');