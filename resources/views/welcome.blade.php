<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
       <script src="{{ asset('js/app.js') }}" async defer></script>

        <title>Apuestas Online</title>
        
    </head>
    <body>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand navbar-dark" href="#">GANQUEST</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Bienvenido {{$cliente->alias}} <span class="sr-only">(Activo)</span></a>
                </li>
            
           
              </ul>
              <form class="form-inline my-2 my-lg-0">
               <label class="col-form-label"> Correo electronico&nbsp; </label>
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit"> {{$cliente->correo}}</button>
              </form>

              
            </div>
          </nav>

        <div class="container-fluid">
            
            <div class="row col-md-12 justify-content-center">
                @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
                @endif
            </div>


            <div class="row ">
                <div class="col-md-3">

                </div>
                <div class="col-md-6 ">
                    <div class="card mt-2">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <table class="table" >
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Tema</th>
                                       
                                        <th>Numero de preguntas</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($juegos as $juego)
                                    <tr>
                                        <form method="POST" action="/jugar">
                                            @csrf
                                            <input type="hidden" id="codigoJuego" name="codigoJuego" value="{{$juego->id}}">
                                            <td>
                                                {{$juego->tema}}
                                            </td>
                                            <td >
                                                {{$juego->numero_preguntas}}
                                            </td>
                                           
                                            <td>
                                                <button type="submit" class="btn btn-primary" >
                                                    JUGAR
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
               
            </div>
        </div>

    </body>
</html>
