<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 align="center" class="text-danger" >Lista de paises</h1>
    <table class="table table-bordered" align="center" >
        <thead align="center">
            <tr class="table-info">
                <th class="text-primary">Nombre</th>
                <th class="text-info">Capital</th>
                <th class="text-info">Moneda</th>
                <th class="text-info">Población en millones </th>
            </tr>
        </thead>
        <tbody align="center">
            @foreach ($naciones as $nombre => $nacion )
                <tr class="thead-Success">
                    <th class="table-dark">{{ $nombre  }}</th>
                    <td>{{ $nacion ["capital"]  }}</td>
                    <td>{{ $nacion ["moneda"]  }}</td>
                    <td>{{ $nacion ["poblacion"]  }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

</body>
</html>
