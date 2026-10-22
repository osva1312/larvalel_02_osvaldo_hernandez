<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi_siamo', [PublicController::class, 'chi_siamo'] )->name('chi_siamo');

Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');

Route::get('/birrificio/detail/{id}', [PublicController::class, 'detail_page'])->name('detail_page');