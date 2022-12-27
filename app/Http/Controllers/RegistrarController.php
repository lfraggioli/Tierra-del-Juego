<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

use Illuminate\Validation\ValidationException;

class RegistrarController extends Controller
{
    
    public function index()
    {
        
    }

    
    public function create()
    {
        return view('session/registrar/registrar');
    }


    private function validar(Request $request)
    {
        //make acepta dos parámetros: dos arrays asociativos.
        //make devuelve un objeto "Validator"
        return Validator::make($request->post(), [
            'username' => ['required', 'alpha_num'],
            'rol' => ['required', 'alpha'],
            'equipo' => ['required', 'alpha-num']
            
        ])->validate();
    }
  
    public function store(Request $request)
    {   

        $this->validar($request);
        try {
                DB::transaction(function () use ($request) {
                    DB::insert('INSERT INTO usuario (username, rol, equipo, password) values (?, ?, ? , ?)', [
                        $request->post('username'),
                        $request->post('equipo'),
                        $request->post('rol'),
                        Hash::make($request->post('contrasenia'))
                    ]);
                });
                return redirect(route('futbol.index'));
            }
            catch (\Exception $exception) {
                echo $exception->getMessage();
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

   
    public function update()
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
