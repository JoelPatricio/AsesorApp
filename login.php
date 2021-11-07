<?php  
    require('config/php/conexion.php');
    session_start();
if(!empty($_POST['matricula']) && !empty($_POST['pass'])){
    $matricula = $_POST['matricula'];
    $pass = $_POST['pass'];
    if($result1=$conn->query("SELECT * FROM usuario WHERE matricula='$matricula' AND contraseña='$pass'")){
        foreach($result1 as $r5){
            $_SESSION['matricula']=$matricula;
            $tipoCuenta_tipo=$r5['tipoCuenta_tipo'];
        }
                if($tipoCuenta_tipo == 0){
                    header('Location: inicioAdmin.php');
                }
                elseif($tipoCuenta_tipo == 1){
                    header('Location: inicioAlumno.php');
                }
                else{
                    header('Location: inicioProfesor.php');
                }
            /*}
            else{
                
                    <div class="alert alert-danger" role="alert">
                        El correo o la contraseña es incorrecta1
                    </div>
                <?php
            }*/
    }
    else{
        ?>
            <div class="alert alert-danger" role="alert">
                El correo o la contraseña es incorrecta2
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
            <a class="px-2 text-white" href="registro.php">Registrarse</a>
        </nav>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-xl-3">
            <div class="card shadow-lg mb-3 bg-white">
                <div class="card-body">
                    <h1 class="text-center h2 mb-3">Iniciar sesión</h1>
                    <form class="justify-content-center" method="POST">
                        <label for="inputMatricula">Matricula:</label>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Matricula" name="matricula">
                        </div><br>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Contraseña:</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña" name="pass">
                        </div><br>
                        <input type="submit" class="btn text-white mb-2" style="background-color: #334257;" value="Iniciar sesión">
                    </form>
                </div>
            </div>
        </div>
    </div>




</body>

</html>