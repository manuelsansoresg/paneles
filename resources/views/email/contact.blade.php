<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contacto</title>
  </head>
  <body>
    <h1>Contacto</h1>
    <p><strong>Nombre:</strong> {{ $request['nombre'] }}</p>
    <p><strong>Correo electrónico:</strong> {{ $request['email'] }}</p>
    <p><strong>Teléfono:</strong> {{ $request['telefono'] }}</p>
    <p><strong>Mensaje:</strong> {{ $request['mensaje'] }}</p>
  </body>
</html>