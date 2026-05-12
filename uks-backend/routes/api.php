<?php
use App\Http\Controllers\datasiswaController;
use Illuminate\Support\Facades\Route;
Route::post("/db_uks",[datasiswaController::class,
"store"]);