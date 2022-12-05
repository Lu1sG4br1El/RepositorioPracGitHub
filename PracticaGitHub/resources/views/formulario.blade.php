<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P12_II</title>
    <h1 class="mt-4 display-1 text-center">FORMULARIO</h1>
</head>
<body style="background-color:grey">
    <a href="formulario">Formulario</a>
    <a href="tabla">Tabla</a>
</body>
<br>
<div>
    <div>
        <div class="text-center">
            Entrada de datos <i class="bi bi-wechat"></i>
        </div>

    <div>
        <form method="post" action="guardarFormulario">
            @csrf
            <div>
                <label class="form-label" name="labelTitulo">Nombre: </label>
                <input type="text" class="form-control" name="txtTitulo">
            </div>
            <div>
                <label class="form-label" name="labelFormulario">Datos: </label>
                <textarea class="form-control" name="txtFormulario" row="4"></textarea>
            </div>
    </div>
        <div>
            <button type="submit" name="btnGuardar">Guardar</button>
        </div>
        </form>
    </div>
</div>
<br>
</html>
