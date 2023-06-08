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
    <style>
      body {
        background-image: url('images/alumnos.jpg');
        background-repeat: no-repeat;
        background-size: cover;
      }

      .container {
        margin-top: 50px;
      }

      table {
        border-collapse: collapse;
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        background-color: ;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
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
    <table>
      <tr>
        <td>rut</td>
        <td>nombre</td>
        <td>apellido</td>
        <td>email</td>
        <td>Acciones</td>
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
        </td>
      </tr>
      <?php
        }
      ?>
    </table>
    <br>
    <table>
      <tr>
        <td>rut</td>
        <td>nombre</td>
        <td>apellido</td>
        <td>email</td>
        <td>Acciones</td>
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
        </td>
      </tr>
      <?php
        }
      ?>
    </table>

   
