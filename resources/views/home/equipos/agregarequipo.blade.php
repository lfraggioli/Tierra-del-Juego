@extends('base')
@section('agregarequipo')

<div class="container text-center allign-items-center">
        <form action="{{route('equipo.agregar', $equipo2[0]->id)}}" method="POST">
            
            @csrf

            <div class="form-group">
                <label>Ingresá el nombre de tu equipo</label>
                <input type="text" class="form-control" name="equipo" value=" {{$equipo2[0]->equipo2}} ">
            </div>
                <button type="submit" class="btn btn-success">Guardar cambios</button>
        </form>
        
    </div>

    
@endsection