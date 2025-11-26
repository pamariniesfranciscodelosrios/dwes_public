<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

/**
* @OA\Info(title="API Usuarios", version="1.0")
*
* @OA\Server(url="http://swagger.local")
*/


class UserController extends Controller
{
     /**
    * @OA\Get(
    *     path="/api/users",
    *     summary="Mostrar usuarios",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function index()
    {
        //Obtenemos todos los usuarios
        $users = User::all(); 
        //Retornamos la respuesta
        return response()->json($users);
    }
    public function detail($id)
    {
        //Obtenemos el usuario
        $user = User::find($id);
        //Retornamos la respuesta
        if($user==null)
        {
            abort(404);
        }
        return response()->json($user);
    }
}
