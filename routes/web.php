<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransferController;
use App\Models\Transfer;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/test',function(){
    return view('transfers.test');
});
Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('clients',[ClientController::class,'index'])->middleware(['auth', 'verified'])->name('clients');

/*
*/
Route::get('transfers',[TransferController::class,'index'])->middleware(['auth','verified'])->name('transfers');
Route::get('transfer/create',[TransferController::class,'create'])->name('transfers.create');
Route::post('transfers/store',[TransferController::class,'store'])->name('transfers.store');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
