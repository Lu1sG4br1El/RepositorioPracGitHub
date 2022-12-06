<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\validadorForm1;

class ControladorPaginas extends Controller
{
    function fTarea(){
        return view('tareas');
    }
    function fTpendientes(){
        return view('tareasP');
    }
    public function procesarTareas(validadorForm1 $req){
        return redirect('/tareas')->with('confirmacion','Se guardaron los datos');
    }
}
