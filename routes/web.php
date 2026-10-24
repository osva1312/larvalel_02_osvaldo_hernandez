<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/about_us', [PublicController::class, 'chi_siamo'] )->name('about_us');

Route::get('/services', [PublicController::class, 'servizi'])->name('services');

Route::get('/brewery/detail/{id}', [PublicController::class, 'detail_page'])->name('detail_page');

Route::get('/services_detail/{id}',[PublicController::class, 'services_detail'])->name('services_detail');