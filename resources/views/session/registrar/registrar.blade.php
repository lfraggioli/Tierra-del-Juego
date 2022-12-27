@extends('base')
@section('registrar')
    

<div class="container text-center allign-items-center">
    <div class="container"><h1>Registrar usuario</h1></div>

        @if(isset($mensaje))
            <div class="alert">
                <p>{{ $mensaje }}</p>
            </div>
        @endif

        @if(isset($errors) && $errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container mt-4 d-flex col-5 font-weight-bold ">
    <form  action=" {{route('registrar.store')}} " method="POST">
        @csrf
        <div class="form-group ">
            <label>Nombre de usuario</label>
            <input type="text" name="username"
                   @if(isset($jugador)) value="{{ $jugador->username }}" @endif
    
                   @if(!$errors->has("username") && !is_null(old("username")))
                    value="{{ old("username") }}"
                   @endif
    
                   @if(!empty($errors->get('username')))
                   class="form-control is-invalid"
                   @else
                   class="form-control"
                @endif
            >
            @if($errors->has('username'))
                <p>{{ $errors->first('username') }}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Rol (jugador/capitan)</label>
            <p class="font-italic">Nota: para crear un partido, debe elegir el rol
                de capitan </p>
            <input type="text" name="rol"
                   @if(isset($jugador)) value="{{ $jugador->rol }}" @endif
    
                   @if(!$errors->has("rol") && !is_null(old("rol")))
                   value="{{ old("rol") }}"
                   @endif
    
                   @if(!empty($errors->get('rol')))
                   class="form-control is-invalid"
                   @else
                   class="form-control"
                @endif
            >
    
            @if($errors->has('rol'))
                <p>{{ $errors->first('rol') }}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Equipo</label>
            
            <input type="text" name="equipo"
                   @if(isset($jugador)) value="{{ $jugador->equipo }}" @endif
    
                   @if(!$errors->has("equipo") && !is_null(old("equipo")))
                   value="{{ old("equipo") }}"
                   @endif
    
                   @if(!empty($errors->get('equipo')))
                   class="form-control is-invalid"
                   @else
                   class="form-control"
                @endif
            >
    
            @if($errors->has('equipo'))
                <p>{{ $errors->first('equipo') }}</p>
            @endif
        </div>
        
        
        
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" name="contrasenia"
                   @if(isset($jugador)) value="{{ $jugador->contrasenia }}" @endif
    
                   @if(!$errors->has("contrasenia") && !is_null(old("contrasenia")))
                   value="{{ old("contrasenia") }}"
                   @endif
    
                   @if(!empty($errors->get('contrasenia')))
                   class="form-control is-invalid"
                   @else
                   class="form-control"
                @endif
            >
            @if($errors->has('contrasenia'))
                <p>{{ $errors->first('contrasenia') }}</p>
            @endif
        </div>
        
        

        <div>
            <button class="btn btn-success" type="submit">Guardar cambios</button></div>
    </form>
        </div>
</div>
@endsection
