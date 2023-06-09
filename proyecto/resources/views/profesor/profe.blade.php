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
        background-color: white ;
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
<body style ="background-color: #d1f5d1;">
    <div class="container py-3 px-3">
      <div class="align py-5 px-3">
        <h1>Taller de Sistemas</h1>
        <hr> 
        <h4>Docentes</h4>
      </div>  
      </div>
          <table>
      <tr>
        <td>rut</td>
        <td>fecha</td>
        <td>Documento adjunto</td>
        <td>Acerca de la propuesta</td>
        <td></td> 
      </tr>
      <?php
        $sql="SELECT * FROM propuestas";
        $result=mysqli_query($conexion,$sql);
        while ($mostrar=mysqli_fetch_array($result)){
      ?>
      <tr>
        <td><?php echo $mostrar["estudiante_rut"]; ?></td>
        <td><?php echo $mostrar["fecha"]; ?></td>
        <td><?php echo $mostrar["documento"]; ?></td>
        <td>
          <form method="POST" action="{{route('profesor.store')}}">
            @csrf
            <div class="mb-3">
              <label for="rut" class="form-label">Rut Docente</label>
              <input type="text" id="rut" name="rut" class="form-control">
            </div>
            <div class="mb-3">
              <label for="rut" class="form-label">Retroalimentacion</label> 
              <input type="text" as="textarea" rows="4" cols="50" name="Retroalimentacion">
            </div>
            <input type="text" id="id" name="id" style="display: none;" value="<?php echo $mostrar["id"]; ?>">
            <br>
            <div class="mb-3 d-grid gap-2 d-lg-block">
              <button type ="submit" class="btn btn-success">Subir Propuesta</button>
            </div>
          </form>
        </td>
      </tr>
      <?php
        }
      ?>
    </div>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>