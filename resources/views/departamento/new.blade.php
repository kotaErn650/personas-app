<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Agregar Departamento</title>
  </head>
  <body>
    <div class="container">
        <h1>Agregar Nuevo Departamento</h1>
        <form method="POST" action="{{ route('pais.update', ['pais' => $pais->pais_codi]) }}">
          @csrf
          @method('PUT')
            <div class="mb-3">
                <label class="form-label">Código</label>
                <input type="text" class="form-control" value="{{ $pais->pais_codi }}" readonly>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" 
                      value="{{ $pais->pais_nomb }}" required>
            </div>
            <div class="mb-3">
                <label for="capital" class="form-label">Capital</label>
                <input type="number" class="form-control" id="capital" name="capital" 
                      value="{{ $pais->pais_capi }}" required>
            </div>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>