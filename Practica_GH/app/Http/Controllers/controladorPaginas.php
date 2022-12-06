<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validarTarea;

class controladorPaginas extends Controller
{
    function fNuevaT(){
        return view('nuevaT');
    }
    function fConsultarT(){
        return view('consultarT');
    }
    public function procesarTarea(validarTarea $req){
        return redirect('/nuevaT')->with('confirmacion','Se han guardado los datos');
    }
}
