<?php

use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class, 'Index'])->name('index');
Route::get('/ព័ត៌មានថ្មីបំផុត', [WebsiteController::class, 'page2'])->name('page2');
Route::get('/សារព័ត៌មានប្រចាំថ្ងៃ', [WebsiteController::class, 'page3'])->name('page3');
Route::get('/សកម្មភាពថ្នាក់ដឹកនាំ', [WebsiteController::class, 'page4'])->name('page4');