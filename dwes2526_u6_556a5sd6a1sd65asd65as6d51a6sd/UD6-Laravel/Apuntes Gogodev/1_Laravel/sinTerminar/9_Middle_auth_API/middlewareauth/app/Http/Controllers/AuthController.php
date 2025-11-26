<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    //para crear los usuarios:

    public function createUser(CreateUserRequest $request){
        //1º validación de los datos, lo hacemos a través de una request que creamos primero
        //Si el sistema llega hasta aquí es porque nos han enviado unos datos válidos
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            //vamos a encriptar el password ya que es info sensible
            'password' => Hash::make($request->password)
        ]);

        //respondemos que el usuario ha sido creado
        return response()->json([
            'status' => true, 
            'message' => 'User create successfully',
            //tenemos que generar el token de seguridad y mandárselo:
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);

    }

    public function loginUser(LoginRequest $request){
        
        //AUTH clase muy útil que nos permite
        //1 acceder a los datos del usuario logueado con  Auth::user()->email;...
        
        //2. attempt, tratar de loguear a un usuario
        // Lo hacemos SOLO (only) con el email y el pass, si falla:
        if(  !Auth::attempt($request->only(['email', 'password']))  )
        {
            return response()->json([
                'status'=>false,
                'message'=> 'Email & password dont match with our records'
            ], 401); // error fallo de autencicación
        }
        //Ahora si la autenticación sabemos que ha sido correcta, lo podemos autenticar:
        //buscamos y almacenamos los datos de usuario:
        $user = User::where('email', $request->email)->first();

        return response()->json([
            'status'=>true,
            'message'=> 'User logged in successfully',
            //Se acaba de generar, generamos el token y se lo damos:
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ],200);

    }

}
