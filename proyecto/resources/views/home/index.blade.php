<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Login</title>
    <link rel="stylesheet" href="css/custom.min.css">
</head>
<body style='background-image: url("images/fondo.jpg"); background-repeat:no-repeat; background-size:cover'>
    <div class="container">
        <div class="container-fluid">         
            <div class="row">             
                <div class="col-12 col-lg-3">                 
                    <div class="card">                     
                        <div class="card-header bg-dark text-white form-control">                         
                            <h4> inicio de sesión Alumno </h4>                      
                        </div>                     
                        <div class="card-body form-control">                        
                            <h4 > Rut </h4>                         
                            <input class="form-control" type="text">                         
                            <br>
                            <h4 > Nombre </h4>                         
                            <input class="form-control" type="text">                         
                            <br>                           
                            <h4> contraseña </h4>                         
                            <input class="form-control" type="text">                         
                            <br>                         
                            <a href="{{route('alumnos.alumnos')}}" button class=" btn btn-dark text-white"> iniciar sesion </button>></a>
                        </div>                 
                    </div>                              
                </div>
                <div class="col-12 col-lg-4">                 
                    <div class="card">                     
                        <div class="card-header bg-dark text-white form-control">                         
                            <h4> inicio de sesión Profesor </h4>                      
                        </div>                    
                        <div class="card-body form-control">                        
                            <h4 > Rut </h4>                         
                            <input class="form-control" type="text">                         
                            <br>
                            <h4 > Nombre </h4>                         
                            <input class="form-control" type="text">                         
                            <br>                          
                            <h4> contraseña </h4>                         
                            <input class="form-control" type="text">                         
                            <br> 
                            <a href="{{route('profesor.profe')}}"><button class=" btn btn-dark text-white"> iniciar sesion </button></a>                        
                            
                        </div>                 
                    </div>                              
                </div>
    </div>
    <a href="{{route('administrador.admin')}}"><button class="btn btn-primary"> Administrador</button></a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>