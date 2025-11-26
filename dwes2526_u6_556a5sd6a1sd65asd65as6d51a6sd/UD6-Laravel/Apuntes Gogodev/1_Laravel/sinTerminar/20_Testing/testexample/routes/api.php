<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//Controlamos las rutas para el usuario con el controlador UserController
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'detail']);
Route::get('/', function() { return "Hello World"; }); //Ruta de prueba

 
