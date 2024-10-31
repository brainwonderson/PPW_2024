<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BEMController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/index', [HomeController::class, 'indexes'])->name('indexes');
Route::get('/register', [AuthManager::class, 'register'])->name('register'); 
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post'); 
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post'); 
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/about', function () {
    return view('aboutus');
})->name('home');

Route::get('/admin', function () {
    return view('admin');
})->name('home');

Route::get('/content', function () {
    return view('Departcontent');
})->name('departcontent');

Route::get('/creator', function () {
    return view('content');
})->name('creatorcontent');

Route::get('/vote', function () {
    return view('vote');
})->name('vote');

Route::get('/diptek', function () {
    return view('diptek');
})->name('diptek');

Route::get('/depagsos', function () {
    return view('depagsos');
})->name('depagsos');

Route::get('/depkominfo', function () {
    return view('depkominfo');
})->name('depkominfo');

Route::get('/depsenbud', function () {
    return view('depsenbud');
})->name('depsenbud');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/index', [HomeController::class, 'indexes'])->name('indexes');

Route::get('/register', [AuthManager::class, 'register'])->name('register'); 

Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post'); 

Route::get('/login', [AuthManager::class, 'login'])->name('login');

Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post'); 

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

route::get('/home', [AdminController::class, 'index'])->name('home');

route::get('/strukturbem', [BEMController::class, 'index'])->name('strukturbem');

route::get('/tambahdata', [BEMController::class, 'tambahdata'])->name('tambahdata');

route::post('/insertdata', [BEMController::class, 'insertdata'])->name('insertdata');


Route::get('/try', function () {
    return view('try');
})->name('try');