<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/appGeneral.css') }}" rel="stylesheet">
    <title>Edit Department</title>
  </head>
  <body>
    <div class="container">
        <h1>Edit Department</h1>
        <form method="POST" action="{{ route('departamento.update', ['departamento' => $departamento->depa_codi]) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="id" class="form-label">Code</label>
                <input type="text" class="form-control" id="id" value="{{ $departamento->depa_codi }}" disabled>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Department</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $departamento->depa_nomb }}" required>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" id="country" name="code" required>
                    @foreach ($paises as $pais)
                        <option value="{{ $pais->pais_codi }}" {{ $pais->pais_codi == $departamento->pais_codi ? 'selected' : '' }}>
                            {{ $pais->pais_nomb }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('departamento.index') }}" class="btn btn-warning">Cancel</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>