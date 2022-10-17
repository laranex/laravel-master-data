<?php

use Illuminate\Support\Facades\Route;
use Laranex\LaravelMasterData\Http\Controllers\MasterDataController;

Route::get('/', [MasterDataController::class, 'list'])->name('master-data.list');
Route::get('/{model}', [MasterDataController::class, 'index'])->name('master-data.index');
Route::get('/{model}/{id}', [MasterDataController::class, 'show'])->name('master-data.show');
