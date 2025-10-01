<?php
include('../conexion.php');
?>

<!--    LOGIN (INGRESO DE USUARIO)

EN ESTA VISTA SE INGRESA DATOS DE USUARIO Y CONTRASEÑA LA CUAL ES VALIDADA EN ESTE MISMO ARCHIVO

-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="euc-jp">
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css1/login/estilo_login.css">

    <link rel="stylesheet" href="../css1/bootstrap.min.css">

</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('../imagenes/index/Inicio sesion.png');">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-6">

                </div>
                <div class="col col-lg-2 text-center">
                    <!-- <img src="../imagenes/index/Inicio sesion.png" width="63%" class="logo img-fluid" alt="Responsive image"> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4" style="border-radius: 21px 21px 21px 21px;">
                        <div class="text-center">
                            <img src="../imagenes/index/Foto_fondo_superior.png" class=" img-fluid rounded" alt="...">
                        </div>
                        <div class="card-body">
                            <form method="post" action="../../loginif.php" class=" img-fluid rounded"  alt="..." >
                                <div style="position: relative;">
                                    <div class="form-group">
                                        <input type="text" class=" text-center form-control rounded-pill"  aria-describedby="emailHelp" placeholder="Usuario" name="usuario">
                                        <img class="usrcampo" src="../imagenes/inicio_sesion/botonUsr.png" alt="usr" width="15%">
                                    </div>
                                </div>
                                <div style="position: relative;">
                                    <div class="form-group">
                                        <input type="password" class=" text-center form-control rounded-pill"  placeholder="Contraseña" name="pass">
                                        <img class="contrasenacampo" src="../imagenes/inicio_sesion/botonContrasena.png" alt="usr" width="15%">
                                    </div>
                                </div>


                                <small class="form-text text-muted text-center">

                                    <a href="../contacto.php">
                                        <div class="text-center">
                                            Olvidaste tu contraseña?
                                        </div>
                                    </a>
                                    <a href="../contacto.php">
                                        <div class="text-center">
 <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
                                            Ayuda
                                        </div>
                                    </a>
                                </small>
                               

                                <div class="text-center">
                                    <button type="submit" value="INGRESAR" class="btn btn-primary btn-lg btn-block rounded-pill">Entrar</button>
                                    <!-- </div> -->

                                </div>

                            </form>


                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-5 text-center">
                        <h6 class="font-weight-bold text-light">    </h6>
                        <h6 class="font-weight-bold text-light">    </h6>
                    </div>
                    <div class="col col-lg-6 text-center">
                        <a hidden href="http://elearning.trainingconsultors.org/"> <img src="../imagenes/inicio_sesion/volver.png" width="75%" class="logo img-fluid" alt="Responsive image">
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div id="dropDownSelect1"></div>

        <script>
            document.oncontextmenu = function() {
                return false
            }
        </script>

        <script src="../js1/jquery.js"></script>
        <script src="../js1/bootstrap.min.js"></script>
        <script src="../js1/main.js"></script>



</body>

</html>
