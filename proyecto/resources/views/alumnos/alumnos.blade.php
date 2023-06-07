<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
    <link rel="stylesheet" href="css/custom.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body  style='background-image url(images/alumnos.jpg;); background-repeat:no-repeat; background-size:cover' >
    <div class="container">
    <h1 class="text-center mt-5">Subir Propuestas - Taller de Sistemas</h1>
    <hr>
    
    <h3>1. Ingresar Propuesta de Proyecto</h3>
    <form>
      <div class="form-group">
        <label for="proyecto">Nombre del Proyecto</label>
        <input type="text" class="form-control" id="proyecto" placeholder="Ingrese el nombre del proyecto">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripción del Proyecto</label>
        <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingrese la descripción del proyecto"></textarea>
      </div>
      <button type="submit" class="btnTuned">Subir Propuesta</button>
    </form>
    
    <hr>
    
    <h3>2. Estado de Revisión de mi Propuesta</h3>
    <div class="alert alert-info" role="alert">
      Su propuesta está en revisión. Por favor, espere la respuesta del profesor.
    </div>
    <button class="btn btn-success">Iniciar Ejecución del Proyecto</button>
    
    <hr>
    
    <h3>3. Retroalimentación de los Profesores</h3>
    <div class="alert alert-warning" role="alert">
      Su propuesta requiere modificaciones. Por favor, realice los cambios necesarios.
    </div>
    <button class="btn btn-primary">Ver Retroalimentación</button>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>