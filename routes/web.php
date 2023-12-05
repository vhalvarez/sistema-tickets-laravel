<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketsController;
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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
});

Route::get('/create-tickets', [TicketsController::class, 'index'])->name('tickets.create');
Route::post('/create-tickets', [TicketsController::class, 'store'])->name('tickets.store');

Route::get('tickets/{ticket}/edit-status', [TicketsController::class, 'editStatus'])->name('tickets.edit');
Route::post('tickets/{ticket}/update-status', [TicketsController::class, 'updateStatus'])->name('tickets.updateStatus');
Route::delete('tickets/{ticket}', [TicketsController::class, 'destroy'])->name('tickets.destroy');


// Route::group(['middleware' => ['role:Admin']], function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
