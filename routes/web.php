<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ContactFormController;
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

/**
 * **************
 * Guest Routes
 * **************
 */
Route::get('/', function () { 
    return view('index');
})->name('index');

Route::post('/contact', function (Request $request) {
    $controller = new ContactFormController();
    $controller->store($request);
    return redirect('/thanks');
})->name('contact');

Route::get('/thanks', function() {
    return view('thanks');
})->name('thanks');

/**
 * **************
 * Admin Routes
 * **************
 */
Route::get('/dashboard', function () {
    Artisan::call('inspire');
    return view('dashboard')->with('inspire', Artisan::output());
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/new-article', function() {
    return view('new_article');
})->middleware(['auth'])->name('new-article');

Route::post('/dashboard/new-article', function(Request $request) {
    dd($request);
})->middleware(['auth'])->name('new-article');

Route::get('/dashboard/visitors', function() {
    return view('visitors')->with('visitors', VisitorController::index());
})->middleware(['auth'])->name('visitors');

Route::get('/dashboard/forms', function() {
    return view('forms')->with('forms', ContactFormController::index());
})->middleware(['auth'])->name('forms');

require __DIR__.'/auth.php';
