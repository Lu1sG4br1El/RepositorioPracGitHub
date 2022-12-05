<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\validadorForm1;

class ControladorPaginas extends Controller
{
    function fFormulario(){
        return view('formulario');
    }
    function fTabla(){
        return view('tabla');
    }
    public function fGuardar(Request $req){
//        return $req->all();

        if(request()->filled('txtTitulo')){
            return 'Se guardo'.request()->input('txtTitulo');
        }
            return "no se guardo";
    }
    
}
