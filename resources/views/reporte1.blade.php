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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre Real</th>
                    <th scope="col">Nombre de Usuario</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($usuarios as $key => $value)
                <tr>
                    <td>{{ $value->usNombreReal }}</td>
                    <td>{{ $value->usNombreUsuario }}</td>
                    <td>{{ $value->usContrasena }}</td>
                    <td>{{ $value->usTelefono }}</td>
                    <td>{{ $value->usTipoUsuario }}</td>
                    <td>{{ $value->usFoto }}</td>
                    <td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>