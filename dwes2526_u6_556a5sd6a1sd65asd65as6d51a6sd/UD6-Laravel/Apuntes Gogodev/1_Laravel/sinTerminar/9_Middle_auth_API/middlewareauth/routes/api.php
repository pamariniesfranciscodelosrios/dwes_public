<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
 

/*
Route::middleware('example')->group(function(){
    //Cambiamos la ruta axample aquí dentro de este grupo:
    Route::middleware('example')->get('/', [ExampleController::class, 'index']);
});
*/

//Le damos también un nombre de ruta con el método name
//Las quitamos una vez hecho el authController (minuto 60 tuto)
/*
Route::get('/no-access', [ExampleController::class, 'noAccess'])->name('no-access');
Route::get('/', [ExampleController::class, 'index']);
*/
Route::post('/create', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser']);

//ruta para obtener un dato protegido, aprovechamos la de laravel.
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); 