<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Login</title>
    <link rel="stylesheet" href="css/custom.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body{
        text-align: center ;
        
    }
    </style>

<body   style='background-image: url("images/fondo.jpg"); background-repeat:no-repeat; background-size:cover'> 
  <div class="container py-3 px-3">
      <div class="align py-5 px-3">
        <img src="images/logo.jpg" alt="logo" class="position-absolute top-0 end-0 logo">
        <h1>Taller de Sistemas</h1>
        <hr> 
        <h4>Inicio</h4>
      </div>  
    </div>

  <!-- fin primer container -->
  <!-- inicio profesores  -->
  <div class="row">
    <div class="col-md-6">
      <section class="form-main">
        <div class="form-content">
          <div class="box">
            <h3>Inicio Docentes</h3>
            <form action="">
              <div class="input-box">
                <input type="text" name="" placeholder="RUT" class="input-control">
              </div>
              <div class="input-box">
                <input type="password" name="" placeholder="pasword" class="input-control">
                <div class="input-link">
                  <a href="#" class="gradient-text">¿Has olvidado tu contraseña?</a>
                </div>
              </div>
              <div class="input-box">
                <a href="{{route('profesor.profe')}}" button class=" btn btn-dark text-black "> iniciar sesión </button></a>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
    <div class="col-md-6">
      <section class="form-main">
        <div class="form-content">
          <div class="box">
            <h3>Inicio Alumnos</h3>
            <form action="">
              <div class="input-box">
                <input type="text" name="" placeholder="RUT" class="input-control">
              </div>
              <div class="input-box">
                <input type="password" name="" placeholder="contraseña" class="input-control">
                <div class="input-link">
                  <a href="#" class="gradient-text">¿Has olvidado tu contraseña?</a>
                </div>
              </div>
              <div class="input-box">
                <a href="{{route('alumnos.alumnos')}}" button class=" btn btn-dark text-black "> iniciar sesión </button>></a>	
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 offset-md-3 text-center mt-3">
      <a href="{{route('administrador.admin')}}"><button type="submit" class="btnTuned">Administrador</button></a>
    </div>
  </div>
</div>



    <!-- fin inicio de profesores  -->              
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>