<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
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
        <h4>Alumnos</h4>
      </div>  
    </div>
    <div class="row justify-content-center">
      <h3>Entregas y Estados</h3>
      <hr>
      <div class="col-12 col-lg-3">
          <table>
            <tr>
              <td><h5>Estado de la entrega</h5></td>
              <td><h6>Sin enviar</h6></td>
            </tr>
            <tr>
              <td><h5>Adjuntar Trabajo</h5></td>
              <td><h6>Aquí subir el PDF</h6></td>
            </tr>
            <tr>
              <td><h5>Estado</h5></td>
              <td><h6>aprobado/rechazado/modificar</h6></td>
            </tr>
          </table>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
