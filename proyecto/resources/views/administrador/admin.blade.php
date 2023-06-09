<?php
  $conexion=mysqli_connect("localhost","root","","bd");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/custom.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
      body {
        background-color: #cbe5ff; /* Fondo azul claro */
        background-image: url('images/alumnos.jpg');
        background-repeat: no-repeat;
        background-size: cover;
      }

      .container {
        margin-top: 50px;
      }

      .table-container {
        display: flex;
        justify-content: center;
        gap: 20px;
      }

      .table {
        border-collapse: collapse;
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        background-color: #ffffff; /* Fondo blanco para las tablas */
        border-radius: 10px; /* Bordes redondeados para las tablas */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        table-layout: fixed; /* Para que las tablas tengan un ancho fijo */
      }

      th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .table-title {
        text-align: center;
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 10px;
      }

      h3 {
        text-align: center;
        margin-top: 20px;
      }
    </style>
</head>
<body>
  <div class="container py-3 px-3">
      <div class="align py-5 px-3">
        <h1>Taller de Sistemas</h1>
        <hr> 
        <h4>Administrador</h4>
      </div>  
    </div>
    <div class="table-container">
      <div>
        <h3 class="table-title">Alumnos</h3>
        <table class="table table-bordered">
          <tr>
            <th style="width: 20%">rut</th>
            <th style="width: 20%">nombre</th>
            <th>apellido</th>
            <th>email</th>
            <th>Acciones</th>
          </tr>
          <?php
            $sql="SELECT * FROM alumnos";
            $result=mysqli_query($conexion,$sql);
            while ($mostrar=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $mostrar["rut"]; ?></td>
            <td><?php echo $mostrar["nombre"]; ?></td>
            <td><?php echo $mostrar["apellido"]; ?></td>
            <td><?php echo $mostrar["email"]; ?></td>
            <td>
              <a href="#" class="btn btn-danger btn-sm">Borrar</a>
              <a href="#" class="btn btn-success btn-sm">Editar</a>
            </td>
          </tr>
          <?php
            }
          ?>
        </table>
      </div>
      
      <div>
        <h3 class="table-title">Docentes</h3>
        <table class="table table-bordered">
          <tr>
            <th style="width: 20%">rut</th>
            <th style="width: 20%">nombre</th>
            <th>apellido</th>
            <th>email</th>
            <th>Acciones</th>
          </tr>
          <?php
            $sql="SELECT * FROM profesores";
            $result=mysqli_query($conexion,$sql);
            while ($mostrar=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $mostrar["rut"]; ?></td>
            <td><?php echo $mostrar["nombre"]; ?></td>
            <td><?php echo $mostrar["apellido"]; ?></td>
            <td><?php echo $mostrar["email"]; ?></td>
            <td>
              <a href="#" class="btn btn-danger btn-sm">Borrar</a>
              <a href="#" class="btn btn-success btn-sm">Editar</a>
            </td>
          </tr>
          <?php
            }
          ?>
        </table>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
