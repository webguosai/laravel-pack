<?php

use Illuminate\Support\Facades\Route;



Route::get('/pack', [\Webguosai\LaravelPack\Http\Controllers\PackController::class, 'index'])->middleware('pack');

