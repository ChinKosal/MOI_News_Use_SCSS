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
Route::get('/សន្តិសុខសង្គម', [WebsiteController::class, 'page5'])->name('page5');
Route::get('/វគ្គបណ្តុះបណ្តាល', [WebsiteController::class, 'page6'])->name('page6');
Route::get('/នគរនាលនិងសហគមន៍', [WebsiteController::class, 'page7'])->name('page7');
Route::get('/ប្រយុទ្ធប្រឆាំងនឹងគ្រឿងញៀន', [WebsiteController::class, 'page8'])->name('page8');
Route::get('/សណ្តាប់ធ្នាប់និងចរាចរណ៍', [WebsiteController::class, 'page9'])->name('page9');
Route::get('/វេទិការនិងនគរបាល', [WebsiteController::class, 'page10'])->name('page10');
Route::get('/ទស្សនាវដ្តី', [WebsiteController::class, 'page11'])->name('page11');
Route::get('/វីដេអូ', [WebsiteController::class, 'page12'])->name('page12');
Route::get('/វិទ្យុ', [WebsiteController::class, 'page13'])->name('page13');
Route::get('អានបន្ថែម', [WebsiteController::class, 'ReadNews'])->name('ReadNews');
