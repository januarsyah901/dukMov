<?php

use App\Http\Controllers\MakananController;
use App\Models\Makanan;
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

Route::get('/dukmovie', function () {
    return view('movie',[
        'title' => 'DukMovie',
        'nama' => 'iron men',
        'harga' => '8000'

    ]);
});
Route::get('/dukresto', [MakananController::class, 'index']);
Route::get('/dukresto/{slug}', [MakananController::class, 'show']);
