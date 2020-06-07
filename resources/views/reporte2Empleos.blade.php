<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Reporte 4</title>
</head>

<body>
    <div class="container">
        <h2>Ofertas</h2>
        <table class="table">
            <thead>
                <tr>
                    <td>Categoria</td>
                    <td>Nombre</td>
                    <td>Ubicacion</td>
                    <td>Sueldo</td>
                    <td>Descripcion</td>
                    <td>Horario</td>
                    <td>FechaInicio</td>
                    <td>FechaFinal</td>
                    <td>Vacantes</td>
                    <td>Empresa</td>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
    </div>
</body>

</html>