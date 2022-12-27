@extends('base')

@section('plaza')
    


        
                <div class="container text-center rounded">{{-- Selectores de plaza y del horario --}}
                    <div class="justify-content-center rowBody">
                        <form class="shadow-lg rounded"  action=" {{route('plazas.store')}} " method="post">
                            <img src="https://i.imgur.com/8Roifh7.png" alt="" srcset="">
                       
                         @csrf
                         <div class="form-group">
                             <label>Plaza:</label>    
                         <select name="plaza" id="" class="form-select">
                             @foreach($plazas as $plaza)
                                 <option value="{{$plaza->nombre}}">{{ $plaza->nombre }}</option>
                                 @endforeach
                         </select>
                         
                         <label>Turno:</label>
                         <select name="horario" id="" class="form-select">
                                     @foreach ($horarios as $hora)
                                     <option value="{{$hora->horario}}">{{ $hora->horario }}</option>
                                     @endforeach
                         </select>
                         
                         </div>
                         <div class="form-group">
                             <div>
                                 <label>Nombre de tu equipo</label>
                                 <input type="text" name="equipo" id="">
                                 <br>
                                 
                             </div>
                             <div>
                                 <label>Fecha a jugar (por ejemplo: 18/12)</label>
                                 <input type="text" name="fecha" id="" placeholder="Formato DD/MM">
                                 <br>
                                 <button class="btn btn-success" type="submit">Confirmar datos</button>
                             </div>
                         </div>
                        </form>
                    </div>
                     </div>

                    </div>
                    

@endsection