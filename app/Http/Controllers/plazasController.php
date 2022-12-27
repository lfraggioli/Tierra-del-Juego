<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isNull;

class plazasController extends Controller
{
   
    public function index()
    {
        
        $plazas = DB::select("SELECT * FROM canchas");
        $horarios = DB::select("SELECT * FROM horarios");
        return view('home/plazas/inicio', [
            "plazas"=>$plazas,
            "horarios"=>$horarios
        ]);
    }


   
    
    public function create(Request $request)
    {
        

        
    }
    
    
    public function store(Request $request)
    {
        
        DB::transaction(function() use ($request){ 
       
            DB::insert('INSERT INTO turnos (horario, plaza, equipo1, fecha) values (?, ?, ?, ?)', [
                $request->post('horario'),
                $request->post('plaza'),
                $request->post('equipo'),
                $request->post('fecha'),
            ]);
        
        });
        return redirect(route('team.index'));
        
    
    }

   
    public function show($id)
    {
        // 
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
