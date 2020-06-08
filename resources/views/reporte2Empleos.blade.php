<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-vue@0.15.8/dist/bootstrap-vue.css" crossorigin="anonymous">
    <title>Reporte 4</title>
</head>

<body>
    <div class="container">
    <img style="float: left;" src="img/company.png">
        <h2 style='position: relative; text-align: center;'>Empleos</h2>
        <table class="table table-bordered" style="padding-top: 60px; text-align:left; margin-left:0px; ">
            <tr>
                <td scope="col" >Categoria</td>
                <td scope="col" >Nombre</td>
                <td scope="col" >Ubicacion</td>
                <td scope="col" >Sueldo</td>
                <td scope="col" >Descripcion</td>
                <td scope="col" >Horario</td>
                <td scope="col" >FechaInicio</td>
                <td scope="col" >FechaFinal</td>
                <td scope="col" >Vacantes</td>
                <td scope="col" >Empresa</td>
            </tr>
            @foreach ($ofertas as $key => $value)
            <tr>
                <td>{{ $value->ofCategoria  }}</td>
                <td>{{ $value->ofNombre }}</td>
                <td>{{ $value->ofUbicacion }}</td>
                <td>{{ $value->ofSueldo }}</td>
                <td>{{ $value->ofDescripcion }}</td>
                <td>{{ $value->ofHorario }}</td>
                <td>{{ $value->ofFechaInicio }}</td>
                <td>{{ $value->ofFechaFinal }}</td>
                <td>{{ $value->ofVacantes }}</td>
                <td>{{ $value->ofEmpresa  }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>