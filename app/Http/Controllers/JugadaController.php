<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugadore;
use App\Juego_categoria;
class JugadaController extends Controller
{

    public function index(){

        $cliente = Jugadore::find(1);
        $juegos = Juego_categoria::all();
        return view('welcome')->with(compact('cliente','juegos'));
      
    }

    public function index2(){

  
        return view('juego')->with(compact(''));
      
    }


}
