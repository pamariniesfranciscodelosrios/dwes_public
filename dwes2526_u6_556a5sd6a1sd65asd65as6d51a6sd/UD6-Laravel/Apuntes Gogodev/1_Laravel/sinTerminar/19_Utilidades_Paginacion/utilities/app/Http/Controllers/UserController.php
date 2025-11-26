<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        /*Formato Vista Blade
        // min 10. No vamos a mandar todos los elementos si no paginados.
        //en vez de acabarla con get vamos a hacerlo con PAGINATE / SIMPLE_PAGINATE
        
        $users= User::paginate(15);
        //Solo botones sin Info de páginas
        //$users= User::simplePaginate(15);
        //Lo hemos guardado y se lo entregamos a una vista
        return view('index', compact('users'));
        */

        //Formato API desde el min 24
        //podríamos devolver el user paginate ya que devuelve el valor Json directamente
       return $users= User::paginate(15);
        
     }

     public function search(){
        
        return view('search');
        
     }

     public function searchPost(Request $request){
        
        
        $request->validate([
            'name' => 'required|min:3|max:255'
        ]);

        //$users = User::where('name', $request->name)-get(); //Sin comodines
        $users = User::where('name', 'like', '%'.$request->name.'%')->get(); //IA
        //$users = User::where('name', '%like%', $request->name)->get(); //Gogodev
        return view('search-results', compact('users'));
        
     }
}
