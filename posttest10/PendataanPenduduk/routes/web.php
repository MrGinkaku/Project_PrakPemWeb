<?php


// routes/web.php
use illuminate\Support\Facades\Route;
use App\Http\Controllers\inputController;

Route::post('/submit-data', [inputController::class,
'submitData'])->name('submit-data');

Route::get('/', function () {
    return view("input");
});
