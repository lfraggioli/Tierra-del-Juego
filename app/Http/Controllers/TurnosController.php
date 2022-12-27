<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class TurnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $turnos = DB::select("SELECT * FROM turnos");
        return view('home/plazas/horarios',
        [
            "turnos"=>$turnos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    // ruta: TEAM.STORE
    public function store(Request $request) {
        
        DB::transaction(function() use ($request){
            $equipo1 = DB::selectOne("SELECT equipo1 FROM turnos
            WHERE plaza = $request->get('plaza') AND horario = $request->get('horario')  ");
            dd($equipo1);
            DB::insert("UPDATE turnos SET (equipo2) values (?) WHERE equipo1 = ?", [
                $request->post('equipo2'),
                $equipo1 -> equipo1
            ]);
        });
        return "Equipo añadido!";
    }


public function show($id)
{
    
                // DB::transaction(function() use ($request){ 
                //            $equipo1 = DB::selectOne("SELECT equipo1 FROM turnos
                //            WHERE plaza = $request->post('plaza') AND horario = $request->post('horario')  ");
                //            $equipo2 = DB::selectOne("SELECT equipo2 FROM turnos
                //            WHERE plaza = $request->post('plaza') AND horario = $request->post('horario')  ");
                
                //            if(!is_null($equipo1) && is_null($equipo2)){
                            
                //                 DB::insert("UPDATE turnos SET equipo2 values (?)", [
                //                 $request->post('equipo')]); 
                            
                //            }else{
                            
                //                DB::insert("INSERT INTO turnos (horario, plaza, equipo1) values (?, ?, ?)", [
                //                    $request->post('horario'),
                //                    $request->post('plaza'),
                //                    $request->post('equipo')
                //                ]); 
                            
                //            }
                
                //         });


                
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo2 = DB::select("SELECT * FROM turnos WHERE id = ?", [$id]);
        return view('home/equipos/agregarequipo', ['equipo2'=>$equipo2]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update()
    // {
        
        
        
                
    // }

    public function editar($id){
        $equipo2 = DB::select("SELECT * FROM turnos WHERE id = ?", [$id]);
        return view('home/equipos/agregarequipo', ['equipo2'=>$equipo2]);
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
