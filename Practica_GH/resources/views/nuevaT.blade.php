@extends('plantilla')
@section('contenido')
@if(session()->has('confirmacion'))
    {!! "<script> Swal.fire('Listo','Los datos se han guadado correctamente', 'success') </script>"!!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
@endif
<h1 class = "mt-4 display-1 text center">Tareas</h1>
<body style="background-color: #">
<br>
<div>
    <div>
        <div class="text-center">
            Añadir tarea por procesar <i class="bi bi-wechat"></i>
        </div>
@if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>Formulario Incompleto!</strong>{{$error}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
        @endif
    <div>
        <form method="post" action="guardarTarea">
            @csrf
    <div class="mb-3">
        <label class="form-label text-center text-dark" name="labelMateria">Materia: </label>
        <input type="text" class="form-control" name="txtMateria" value="{{old('txtMateria')}}">
        <p class="fw-bold text-danger"> {{$errors->first('txtMateria')}}</p>
    </div>
    <div class="mb-3">
        <label class="form-label text-center text-dark" name="labelTarea">Tarea: </label>
        <input type="text" class="form-control" name="txtTarea" value="{{old('txtTarea')}}">
        <p class="fw-bold text-danger"> {{$errors->first('txtTarea')}}</p>
    </div>
        <div>
        <button type="submit" name="btnGuardar">Guardar</button>
        </div>
        </form>
    </div>
</div>
<br>
@stop