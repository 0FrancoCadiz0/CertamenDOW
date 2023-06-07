<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/custom.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <h1 class="text-center mt-5">Gestión del Equipo - Administrador</h1>
    <hr>
    
    <h3>1. Gestionar Equipo de Profesores</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Especialidad</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Profesor 1</td>
          <td>Especialidad 1</td>
          <td>
            <button class="btn btn-primary">Editar</button>
            <button class="btn btn-danger">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>Profesor 2</td>
          <td>Especialidad 2</td>
          <td>
            <button class="btn btn-primary">Editar</button>
            <button class="btn btn-danger">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
    
    <hr>
    
    <h3>2. Gestionar Listado de Alumnos</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Alumno 1</td>
          <td>alumno1@example.com</td>
          <td>
            <button class="btn btn-primary">Editar</button>
            <button class="btn btn-danger">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>Alumno 2</td>
          <td>alumno2@example.com</td>
          <td>
            <button class="btn btn-primary">Editar</button>
            <button class="btn btn-danger">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
    
    <hr>
    
    <h3>3. Establecer Estado de Propuesta Revisada</h3>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Propuesta: Proyecto 1</h5>
        <form>
          <div class="form-group">
            <label for="estado">Estado:</label>
            <select class="form-control" id="estado">
              <option>Aprobada</option>
              <option>Rechazada</option>
              <option>Necesita Modificaciones</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Guardar Estado</button>
        </form>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>