<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/visitors', function() {
    return view('visitors')->with('visitors', VisitorController::index());
})->middleware(['auth'])->name('visitors');

Route::get('/forms', function() {
    return view('forms');
})->middleware(['auth'])->name('forms');

require __DIR__.'/auth.php';
