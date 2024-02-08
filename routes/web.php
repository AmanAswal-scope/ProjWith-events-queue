<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmittedDataController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\admin_check;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('hey');

// Route::get('/submit-details', function () {
//     return view('submit_details');
// })->name('submit.details');

// Route::post('/process-details', [SubmittedDataController::class, 'store'])->name('process.details');







//Route::middleware(['web'])->group( function () {

Route::get('/',function()
{
    return view('login');
})->name('login.page');



 //Route::post('/login', [AuthController::class, 'loginPost'])->name('login-post');

Route::post('/login', [AuthController::class, 'loginPost'])->name('login-post'); // This is your login POST route






  //Route::middleware(['auth:admin_check'])->group(function () {
    Route::get('/home', [AuthController::class, 'dashboard'])->name('home.page');


// Route::get('/home',function()
// {
//     return view ('index');
// })->name('home.page');


//Route::post('/home', [AuthController::class, 'loginPost'])->name('login-post'); // This is your login POST route



Route::get('/services', function () {
    return view('services');
})->name('services.page');


Route::get('/about-us', function () {
    return view('about-us');
})->name('about.page');


Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact.page');

Route::post('/contact-us', [ContactController::class, 'submitForm'])->name('submit.contact.form');
// });



 //});