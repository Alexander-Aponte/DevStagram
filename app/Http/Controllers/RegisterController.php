<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //No Me Funciona para el Usename ya a sido Tomado
        //$request->resquest->add(['username' => Str::slug($request->username)]);

        //dd($resquest);
  
        $this->validate($request, [
            'name' =>'required|min:4',
            'username' =>'required|unique:users|min:6|max:20',
            'email' =>'required|unique:users|email|min:10|max:30',
            'password' =>'required|confirmed|min:6',
            
            
        ]);
 
        //dd('Creando Usuario');

        User::Create([
            'name' => $request->name,
            'username' => Str::slug($request->username),
            'email' => $request->email,
            'password' => hash::make($request->password)

                        
        ]);
        //Autenticar Usuarios
        auth()->attempt($request->only('email','password'));


        //Refireccionar al Muro
        return redirect()->route('post.index');
    }
      
}
