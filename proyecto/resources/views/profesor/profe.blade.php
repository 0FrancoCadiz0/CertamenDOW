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
    <h1 class="text-center mt-5">Propuestas de Proyecto - Vista del Profesor</h1>
    <hr>
    
    <h3>1. Propuestas Ingresadas por los Estudiantes</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombre del Proyecto</th>
          <th scope="col">Descripción</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Proyecto 1</td>
          <td>Descripción del Proyecto 1</td>
          <td>
            <button class="btn btn-primary">Revisar</button>
          </td>
        </tr>
        <tr>
          <td>Proyecto 2</td>
          <td>Descripción del Proyecto 2</td>
          <td>
            <button class="btn btn-primary">Revisar</button>
          </td>
        </tr>
      </tbody>
    </table>
    
    <hr>
    
    <h3>2. Ingresar Comentarios a las Revisiones</h3>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Comentarios</h5>
        <form>
          <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="Ingrese su comentario"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Guardar Comentario</button>
        </form>
      </div>
    </div>
    
    <hr>
    
    <h3>3. Borrar Comentarios de una Propuesta</h3>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Comentarios de la Propuesta</h5>
        <ul class="list-group">
          <li class="list-group-item">Comentario 1 <button class="btn btn-danger btn-sm float-right">Borrar</button></li>
          <li class="list-group-item">Comentario 2 <button class="btn btn-danger btn-sm float-right">Borrar</button></li>
        </ul>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>