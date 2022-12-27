@extends('base')
@section('login')

    <div class="container">
        <div class="rowBody align-self-center">
            <div class="col  text-center shadow p-3 mb-5">
                
                 <h1>Iniciá sesión o <a class="text-warning" href="{{route('registrar.create')}}">registrate</a></h1>
                 
                 <form class="mt-5" method="POST" action=" {{route('login.store')}} ">
                     @csrf
                     <input class="form-control" type="text" name="usuario" placeholder="Nombre de usuario">
                     <input class="form-control" type="password" name="contrasenia" placeholder="Contraseña">
                     <br>
                     
                    <button class="btn btn-success btn-lg" type="submit" >Entrar</button>
                     
                 </form>
                 </div>
             
        </div>
    </div>
    

@endsection