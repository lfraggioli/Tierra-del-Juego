<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Futbol-App</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    
        
</head>
<body>
    <header class="header bg-dark">
        <div class="container">
            <div class="">
                <a href="" class="col-3">
                    <img src="https://i.imgur.com/R2YHTgQ.png" width="200px" alt="">
                </a>
            </div>
            
        </div>
    </header>
    <style>
        .rowBody {
            padding: 200px;
        }
    </style>
    
    <div class="bg-image" style="background-image: url(https://i.imgur.com/4LZbQN8.png); height: 100vh">
       
        <div class="container text-dark">
    @yield('home')
    @yield('login')
    @yield('datos')
    @yield('plaza')
    @yield('registrar')
    @yield('horarios')
    @yield('agregarequipo')
    
</div>
</div>
<footer class="bg-dark text-white ">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        
        <div class="container">
            <nav class="row">
                {{-- <a href="#" class="col-6 text-reset text-uppercase d-flex align-items-center">
                    <img style="width: 400px" src="https://i.imgur.com/EaBgT5s.png" class="img-logo mr-2" alt="Logo">    
                </a> 
                <ul class="ml-2 d-flex">
                    <br>
                    <li class="font-weight-bold ml-9 mt-3 col-12">
                        Hecho para el curso Full-Stack del CPCI - 2022
                    </li>
                </ul> --}}
                
                <img src="https://i.imgur.com/Nr1Gotg.png" alt="Logo" >
            </nav>
        </div>
    </section>
</footer>


</body>
</html>