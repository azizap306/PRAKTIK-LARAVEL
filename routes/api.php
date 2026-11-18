<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
Route::apiResource('/article',ArticleController::class);
