<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class futbolAppController extends Controller
{
    public function __construct()
    {
        // $this->middleware('crear_equipo')->only('index');
    }



    public function index(Request $request){
       
        $usuario = Auth::user();
       return view('home/inicio', [
        "usuario"=>$usuario
       ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('session/registrar/crearequipo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            DB::insert('INSERT INTO usuario (equipo) values (?)', [
                $request->post('equipo', default:"ERROR"),
                // $request->post('email', default:"ERROR"),
                // Hash::make($request->post('contrasenia')),
                // $request->post('rol', default:"ERROR")
            ]);
         });
        DB::commit();
        return redirect(route('plazas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jugador = DB::select("SELECT * FROM usuario WHERE id = :id", ["id" => $id]);

        return view('session/iniciar/usuarios', [
            'jugador' => $jugador
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
