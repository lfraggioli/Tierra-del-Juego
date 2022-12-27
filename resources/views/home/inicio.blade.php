@extends('base')
@section('home')
    

    

    <div class="container rowBody text-center">
        
        <img src="https://i.imgur.com/ozSQ4Po.png">
    <div class=" shadow-lg p-3 mb-5 bg-body rounded">
        {{-- <h1 >¡Bienvenido a la aplicación!</h1> --}}

        <h4>Seleccioná una opción para comenzar</h4>
      
        <div class="col-auto">
            <a href="{{route('plazas.index')}}"><button class="btn btn-warning" type="button">Crear partido nuevo</button></a>
            <a href="{{route('team.index')}}"><button class="btn btn-warning" type="button">Sumarse a un partido</button></a>
            {{-- <a href="{{ route('futbol.show', $usuario->id) }}" class="btn btn-success">Datos del usuario</a> --}}
            <form action="{{ route('logout', $usuario->id) }}" method="POST">
                @csrf
            {{-- <a href="{{route('login.destroy')}}" </a> --}}
                <button class="btn btn-danger">Cerrar sesión</button>
            
           </form>
  
        </div>
    </div>
</div>
    
    {{-- @can('crear_equipo')
    <form action=" {{route('futbol.store')}} " method="post">
        @csrf    
        <div>
                <input type="text" name="equipo">
            </div>
            <div>
                <button type="submit">Guardar cambios</button>
            </div>
        </form>
        
        @endcan --}}

@endsection        

