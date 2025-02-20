<!DOCTYPE html>
<html>
<head>
    <title>Dashboard de notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZHc62qQTE9Yg/J/68SIy3Te4Bkz" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1>Dashboard de notas</h1>
        <p class="lead">Aquí podrás ver las notas de los estudiantes.</p>

        <form>
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
                    <th>Matemáticas</th>
                    <th>Ciencias</th>
                    <th>Lengua</th>
                    <th>Promedio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Estudiante 1</td>
                    <td>8</td>
                    <td>9</td>
                    <td>7</td>
                    <td>8.0</td>
                </tr>
                <tr>
                    <td>Estudiante 2</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>8.0</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>