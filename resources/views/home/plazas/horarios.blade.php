@extends('base')
@section('horarios')
{{-- http://localhost/futbol-app/public/team --}}

    <div class="rowBody allign-self-center">
        <div class="text-center">
            {{-- <h3>Sumate a un partido creado</h3>
            <p>¡Elegí tu rival en esta lista!</p> --}}
            <img src="https://i.imgur.com/ioR8u4G.png" alt="" srcset="">
        </div>
        <form>
            @csrf
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <th>Fecha</th>
                    <th>Plaza</th>
                    <th>Turno</th>
                    <th>Equipo 1</th>
                    <th>Equipo 2</th>
                </thead>
                <tbody class="table-success text-dark">
                    @foreach ($turnos as $turno)
                    <tr>
                        <td> {{$turno->fecha}} </td>
                        <td> {{$turno->plaza}} </td>
                        <td> {{$turno->horario}} </td>
                        <td> {{$turno->equipo1}} </td>
                        {{-- <td> @if (($turno->equipo2)===NULL)
                            <form action=" {{route('team.store')}} " method="post">
                                @csrf
                                <input type="text" name="equipo2">
                                <button class="btn-primary">Agregar</button>
                            </form>
                                @else {{$turno->equipo2}}
                            @endif
                        </td> --}}
                        <td>@if (($turno->equipo2)===NULL)
                            <a href="team/{{$turno->id}}/edit" class="btn btn-warning">Agregar Equipo</a>
                            @else {{$turno->equipo2}}
                            @endif
                        </td>
                    </tr>
                    
                    @endforeach
                    </tbody>
                </table>
        </form>
    </div>


@endsection