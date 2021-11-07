<?php  
    require('config/php/conexion.php');
    session_start();
    if(!isset($_SESSION['matricula'])){
        header('Location: index.php');
        exit;
    }
    echo $_SESSION['matricula'];
?>

<!DOCTYPE html>
<html lang="es_MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/cfa31df702.js" crossorigin="anonymous"></script>
    <title>Index</title>
</head>

<body>
    <!-- Barra de navegación -->
    <div class="d-flex justify-content-between align-items-center p-3 border-bottom shadow container-fluid"
        style="background-color: #334257;">
        <h5 class="ml-lg-5 pl-lg-5 my-0 mr-md-auto font-weight-normal text-white">
            <div class="col col-lg-3">
                <img src="resources\fcc-buap-hd.png" class="img-fluid" alt="...">
            </div>
        </h5>
        <nav class="p-3">
            <a class="text-white" href="registro.html">Alumnos registrados</a>
            <a class="px-5 text-white" href="registro.html">Mis asesorias</a>
            <a class="px-2 text-white" href="registro.html">Cerrar Sesión</a>
        </nav>
    </div>


    <!-- Contenido -->
    <div class="container-lg">
        <!-- Titulo -->
        <div class="row justify-content-center align-items-center my-3">
            <h1 class="font-weight-light text-center mr-3">Mis Asesorias</h1>
        </div>

        <!-- Cursos -->
        <div class="container mb-4">
            <div class="col-11 text-right">
                <a href="agregarAsesoria.html" class="btn text-white" style="background-color: #334257;">Agregar asesoria</a>
                <hr class="bg-danger border-2 border-top" style="background-color: #334257;">
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-xl-4">
            <div class="col mb-4">
                <div class="card shadow-lg">
                    <div class="card-body text-center">
                        <h3 class="font-weight-light mb-1">Matematicas 1</h3>
                        <h6 class="font-weight-light mb-1">Estado: <span class="badge bg-success">Disponible</span></h6>
                        <ul class="list-group mb-3">
                            <li class="list-group-item " aria-disabled="true">
                                <h6 class="font-weight-light">Fecha: 13/10/2021</h6>
                                <h6 class="font-weight-light">Hora: 10:30 a.m</h6>
                                <h6 class="font-weight-light">Lugar: 1CCO2-104</h6>
                            </li>
                        </ul>
                        <a href="#" class="btn text-white" style="background-color: #334257;">Ver asesoria</a>
                        <a href="#" class="btn btn-danger">Eliminar <i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card shadow-lg">
                    <div class="card-body text-center">
                        <h3 class="font-weight-light mb-1">Matematicas 2</h3>
                        <h6 class="font-weight-light mb-1">Estado: <span class="badge bg-warning text-dark">En solicitud</span></h6>
                        <ul class="list-group mb-3">
                            <li class="list-group-item " aria-disabled="true">
                                <h6 class="font-weight-light">Fecha: 13/10/2021</h6>
                                <h6 class="font-weight-light">Hora: 10:30 a.m</h6>
                                <h6 class="font-weight-light">Lugar: 1CCO2-104</h6>
                            </li>
                        </ul>
                        <a href="#" class="btn text-white" style="background-color: #334257;">Ver asesoria</a>
                        <a href="#" class="btn btn-danger">Eliminar <i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card shadow-lg">
                    <div class="card-body text-center">
                        <h3 class="font-weight-light mb-1">Matematicas 3</h3>
                        <h6 class="font-weight-light mb-1">Estado: <span class="badge bg-danger">Ocupado</span></h6>
                        <ul class="list-group mb-3">
                            <li class="list-group-item " aria-disabled="true">
                                <h6 class="font-weight-light">Fecha: 13/10/2021</h6>
                                <h6 class="font-weight-light">Hora: 10:30 a.m</h6>
                                <h6 class="font-weight-light">Lugar: 1CCO2-104</h6>
                            </li>
                        </ul>
                        <a href="#" class="btn text-white"
                            style="background-color: #334257;">Ver asesoria</a>
                        <a href="#" class="btn btn-danger">Eliminar <i
                                class="far fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>

        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>