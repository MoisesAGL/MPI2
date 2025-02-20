<!DOCTYPE html>
<html>
<head>
    <title>Dashboard de notas</title>
</head>
<body>
    <div class="container">
        <h1>Dashboard de notas</h1>
        <p class="lead">Aquí podrás ver las notas de los estudiantes.</p>

        <form action="{{ route('dashboard') }}" method="GET">
            <div class="mb-3">
                <label for="buscar_estudiante" class="form-label">Buscar estudiante:</label>
                <input type="text" class="form-control" id="buscar_estudiante" name="buscar_estudiante">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Fecha de registro</th>
                    <th>Nota de informática</th>
                    <th>Fecha de nota</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>{{ $estudiante->nombre }}</td>
                        <td>{{ $estudiante->apellido }}</td>
                        <td>{{ $estudiante->cedula }}</td>
                        <td>{{ $estudiante->correo }}</td>
                        <td>{{ $estudiante->usuario }}</td>
                        <td>{{ $estudiante->rol }}</td>
                        <td>{{ $estudiante->fecha }}</td>
                        <td>
                            @foreach ($estudiante->informatica as $nota)
                                {{ $nota->nota }} <br>  {{-- O usa la coma como separador si prefieres --}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($estudiante->informatica as $nota)
                                {{ $nota->fecha }} <br> {{-- O usa la coma como separador si prefieres --}}
                            @endforeach
                        </td>
                    </tr>
                @endforeach  {{-- Cierra el bucle @foreach --}}
            </tbody>  {{-- Cierra la etiqueta <tbody> --}}
        </table>
    </div>
</body>
</html>