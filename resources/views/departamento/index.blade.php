<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/appGeneral.css') }}" rel="stylesheet">
    <title>Departamentos</title>
  </head>
  <body>
    <nav class="navbar bg-cyan-950">
        <form class="container-fluid justify-content-start">
            <button class="btn btn-outline-success me-2" type="button" onclick="window.location.href='http://127.0.0.1:8000/comuna'">IR a Comunas 🫂</button>
            <button class="btn btn-outline-success me-2" type="button" onclick="window.location.href='http://127.0.0.1:8000/municipio'">IR a Municipios 🔜</button>
            <button class="btn btn-outline-success me-2" type="button" onclick="window.location.href='http://127.0.0.1:8000/pais'">IR a Paises 🏴</button>
        </form>
    </nav>
    <div class="container">
        <h1>Listado de Departamentos</h1>
        <a href="{{ route('departamento.create') }}" class="btn btn-primary">Agregar Departamento</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Department</th>
                    <th scope="col">Country</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departamentos as $departamento)
                <tr>
                    <td>{{ $departamento->depa_codi }}</td>
                    <td>{{ $departamento->depa_nomb }}</td>
                    <td>{{ $departamento->pais_nomb }}</td>
                    <td>
                        
                        <form action="{{ route('departamento.destroy', ['departamento' => $departamento->depa_codi]) }}" method="POST" style="display:inline-block" onsubmit="return confirm('¿Seguro que quieres eliminar este departamento?')">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('departamento.edit', ['departamento' => $departamento->depa_codi]) }}" class="btn btn-info">Edit</a>
                        </form>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>