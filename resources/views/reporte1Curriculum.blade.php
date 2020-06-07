<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Reporte 1</title>
</head>
<body>
    <div class="container">
        <h2>Curriculum</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($usuarios as $key => $value)
                <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->phone }}</td>
                    <td>{{ $value->address }}</td>
                    <td>{{ $value->cedula }}</td>
                    <td>{{ $value->photo }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <h2>Experiencias</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Puesto</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Final</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($experiencias as $key => $value)
                <tr>
                    <td>{{ $value->exPuesto }}</td>
                    <td>{{ $value->exDescripcion }}</td>
                    <td>{{ $value->exFechaInicio }}</td>
                    <td>{{ $value->fechaFinal }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>