<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// controller
use App\Http\Controllers\MainController;

use App\Http\Controllers\Admin\MainController as AdminMainController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Admin\PostController;

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
// fa riferimento al Controller MainController che allinterno ha la funzione index('wellcome) 

Route::get('/',[MainController::class, 'index'])->name('home');


Route::get('/admin/dashboard', [AdminMainController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('admin.dashboard');
   // HO tolto il middleweare, non riuscivo a fare il log-in 
   
Route::prefix('admin')->name('admin.')->group(function(){

    Route::resource('posts', PostController::class);

});

// si possono creare dei macro gruppi, cambiando name e prefix 

require __DIR__.'/auth.php';


// Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function(){

//     Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard'); 

// });


