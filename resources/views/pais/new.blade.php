<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/appGeneral.css') }}" rel="stylesheet">
    <title>Agregar País</title>
  </head>
  <body>
    <div class="container">
        <h1>Agregar Nuevo País</h1>
        <form method="POST" action="{{ route('pais.store') }}">
    @csrf
    <div class="mb-3">
        <label for="code" class="form-label">Código del País (3 letras)</label>
        <input type="text" class="form-control" id="code" name="code" maxlength="3" required>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Nombre del País</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="capital" class="form-label">Código de Capital</label>
        <input type="number" class="form-control" id="capital" name="capital" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>