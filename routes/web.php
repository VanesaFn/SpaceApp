<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomePublicController;
use App\Http\Controllers\ProfilePublicController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\ResourcesPublicController;
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

Route::get('/', [HomePublicController::class, 'index'])->name('home');

Route::get('/sign_in', function () {
    return view('public.auth.sign_in');
})->name('sign_in');

Route::get('/sign_up', function () {
    return view('public.auth.sign_up');
})->name('sign_up');

Route::get('/profile', [ProfilePublicController::class, 'index'])->middleware(['auth']);

Route::get('/detail', function () {
    return view('public.resources.detail');
});

Route::get('/team', function () {
    return view('public.team.index');
});

Route::get('/up_res', function () {
    return view('dashboard_public.resources.create');
});

Route::get('/about_us', [AboutUsController::class, 'index'])->name('about_us');

Route::get('/resources', [ResourcesController::class,'create'])->name('resources');
Route::get('/resources_public', [ResourcesPublicController::class,'index'])->name('resources_public');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
