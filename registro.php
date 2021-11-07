<?php  
    require('config/php/conexion.php');
if(!empty($_POST['nombre']) && !empty($_POST['matricula']) && !empty($_POST['correo']) && !empty($_POST['pass'])){
	$nombre = $_POST['nombre'];
    $matricula = $_POST['matricula'];
    $correo = $_POST['correo'];
    #$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT, [15]); //Error en la encriptación
    $pass = $_POST['pass'];
    $tipo = $_POST['tipo'];
    try{
    if($tipo == "tipo1"){
        if( strpos($correo, "@alumno.buap.mx") ){
            if( $result1=$conn->query("INSERT INTO usuario
                (matricula, nombreCompleto, correo, contraseña, tipoCuenta_tipo) 
                VALUES ('$matricula', '$nombre', '$correo', '$pass', 1)") ){
                header('Location: login.php');
            }
        }
        else{
            ?>
            <div class="alert alert-danger" role="alert">
                El correo ingresado no es institucional
            </div>
            <?php
        }
    }
    else{
        if( strpos($correo, ".buap.mx") ){
            if( $result1=$conn->query("INSERT INTO usuario
                (matricula, nombreCompleto, correo, contraseña, tipoCuenta_tipo) 
                VALUES ('$matricula', '$nombre', '$correo', '$pass', 2)") ){
                header('Location: login.php');
            }
        }
        else{
            ?>
            <div class="alert alert-danger" role="alert">
                El correo ingresado no es institucional
            </div>
            <?php
        }
    }
    } catch (Exception $e){
        ?>
            <div class="alert alert-danger" role="alert">
                El correo ingresado no es institucional
            </div>
        <?php
    }

}

?>


<!DOCTYPE html>
<html lang="es_MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Index</title>
</head>

<body class="bg-light">
    <!-- Barra de navegación -->
    <div class="d-flex justify-content-between align-items-center p-3 border-bottom shadow container-fluid"
        style="background-color: #334257;">
        <h5 class="ml-lg-5 pl-lg-5 my-0 mr-md-auto font-weight-normal text-white">
            <div class="col col-lg-3">
                <img src="resources\fcc-buap-hd.png" class="img-fluid" alt="...">
            </div>
        </h5>
        <nav class="p-3">
            <a class="px-2 text-white" href="login.html">Iniciar sesion</a>
        </nav>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-xl-4">        
            <div class="card shadow-lg mb-3 bg-white">
                <div class="card-body">
                    <h1 class="text-center h2 mb-3">Registrate</h1>
                    <form method="POST">
                        <div class="form-group mb-2">
                            <label for="inputName">Nombre completo:</label>
                            <input type="text" class="form-control md-3" id="inputAddress2" placeholder="Nombre completo" name="nombre">
                        </div>
                        <label for="inputMatricula">Matricula:</label>
                        <div class="form-group col-md-6 mb-2">
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Matricula" name="matricula">
                        </div>
                        <div class="form-row col-md-10 mb-2">
                            <div class="form-group col">
                                <label for="inputEmail4">Correo institucional:</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Correo institucional" name="correo">
                            </div>
                            <div class="form-group mb-2">
                                <label for="inputPassword4">Contraseña:</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña" name="pass">
                            </div>
                            <ul class="list-group mb-3">
                                <li class="list-group-item " aria-disabled="true">
                                    <h6 class="font-weight-light">Seleccione uno:</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tipo" value="tipo1" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Alumno
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tipo" value="tipo2" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Profesor
                                        </label>
                                    </div>
                                </li>
                            </ul>
                            
                        </div>
                        <div class="form-group">
                            <nav class="p-3">
                                <a class="px-3 text-ligh" href="login.html" style="color: #334257;">Ya tengo cuenta</a>
                                <input type="submit" class="btn text-white mb-2" style="background-color: #334257;" value="Registrarse">
                            </nav>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</body>

</html>