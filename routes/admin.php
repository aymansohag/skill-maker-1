<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\SuccessStoryController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ManagePerticipateController;
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
    return view('admin.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('service', ServiceController::class);
Route::resource('office', OfficeController::class);
Route::resource('success_story', SuccessStoryController::class);
Route::resource('seminar', SeminarController::class);
Route::resource('faq', FaqController::class);
Route::resource('perticipate', ManagePerticipateController::class);