<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BootcampController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Primera ruta REST
Route::get('/prueba',function(){
    echo "holaxd";
});

//vincular el controlador bootcamp a sus respectivas rutas
Route::apiResource('bootcamps' ,  BootcampController::class);
