<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
   
    public function index(Request $request)

    {   $usuario = Auth::user();   
        // {{-- http://localhost/futbol-app/public/login --}}
        return view('session/iniciar/login');
    }

   
    public function create(Request $request)
    {   
        $usuario = Auth::user();
        return view('session/iniciar/login');
    }

    
    private function validar(Request $request)
    {
        //make acepta dos parámetros: dos arrays asociativos.
        //make devuelve un objeto "Validator"
        return Validator::make($request->post(), [
            'username' => ['required', 'alpha-num'],
            'password' => ['required', 'password']
        ])->validate();
    }


    public function store(Request $request)
    {   
        
        //Para validacion en inicio de sesion
        if(Auth::attempt([
            'username'=>$request->post('usuario'),
            'password'=>$request->post('contrasenia')
        ])){
            $request->session()->regenerate();
            
            
            return redirect()->intended(route('futbol.index'));
        }
        else{
            //NO COINCIDE NOMBRE DE USUARIO/CONTRASEÑA, O NO EXISTEN

            return back()->withErrors([
                'usuario'=>'El nombre de usuario no coincide con ningún registro',
                'contrasenia'=>'La contraseña no coincide con el nombre de usuario'
            ]);
        }
        
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update($id)
    {
        
    }

   
    public function destroy(Request $request)
    {
        $request->session()->invalidate();
        return redirect(route('login.index'));
    }
}
