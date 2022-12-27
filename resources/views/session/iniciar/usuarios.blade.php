@extends('base')
@section('datos')

    <img src="https://i.imgur.com/YHad1YG.png" alt="" srcset="">
    <table class="table table-striped table-hover table-dark">
        <thead >
            <th>ID</th>
            <th>Nombre de usuario</th>
            <th>Equipo</th>
            <th>Rol</th>
        </thead>
        <tbody>
            @foreach ($jugador as $jugador)
                <tr>
                    <td>{{$jugador->id}}</td>
                    <td>{{$jugador->username}}</td>
                    <td>{{$jugador->equipo}}</td>
                    <td>{{$jugador->rol}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection