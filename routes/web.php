<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', [VisitorController::class, 'index'])->name('index');

Route::post('/contact', [ContactFormController::class, 'store'])->name('contact');

Route::get('/thanks', [VisitorController::class, 'thanks'])->name('thanks');

/**
 * **************
 * Admin Routes
 * **************
 */

Route::group(['prefix' => '/dashboard', 'middleware' => ['auth']], function() {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/new-article', [ArticleController::class, 'index'])->name('new-article');
    
    Route::post('/new-article', [ArticleController::class, 'store'])->name('new-article');
    
    Route::get('/visitors', [VisitorController::class, 'list'])->name('visitors');

    Route::get('/forms', [ContactFormController::class, 'list'])->name('forms');

});


require __DIR__.'/auth.php';
