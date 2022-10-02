<?php

use App\Http\Controllers\ProfilePublicController;
use App\Http\Controllers\ResourcesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('public.home.index');
});

Route::get('/sign_in', function () {
    return view('public.auth.sign_in');
});

Route::get('/sign_up', function () {
    return view('public.auth.sign_up');
});

Route::get('/profile', [ProfilePublicController::class, 'index']);

Route::get('/detail', function () {
    return view('public.resources.detail');
});

Route::get('/team', function () {
    return view('public.team.index');
});

Route::get('/up_res', function () {
    return view('dashboard_public.resources.create');
});

Route::get('/resources', [ResourcesController::class,'create']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
