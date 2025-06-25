<?php

use App\Http\Controllers\ProfileController;
use App\Models\Pago;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('prueba', function (){
//     $pago = new Pago;
//     $pago->monto = 12.12;
//     $pago->fecha_pago = "12/12/12";
//     $pago->metodo_pago = "Efectivo";
//     $pago->save();


//     return $pago;
// });