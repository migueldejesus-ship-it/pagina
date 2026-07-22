<?php
// Bloque de Controladores
require_once "contenido/controller/datosRevista_controller.php";

// Bloque de Modelos
require_once "contenido/model/datosRevista_model.php";

$consultarRevista = ControladorDatosRevista::ctrConsultarRevista();

?>


<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta name="theme-color" />
    <meta content="text/html; X-Content-Type-Options=nosniff; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="Instituto de Profesionalización del Magisterio Poblano" />
    <meta name="author" content="Instituto de Profesionalización del Magisterio Poblano,ipmp" />
    <meta name="copyright" content="Instituto de Profesionalización del Magisterio Poblano" />
    <meta name="robots" content="index" />
    <title>Instituto de Profesionalización del Magisterio Poblano</title>
    <script src='https://code.jquery.com/jquery-3.4.1.min.js' type='text/javascript'></script>
    <link rel="shortcut icon" href="contenido/views/img/favicon.ico">
    <link rel="apple-touch-icon" href="contenido/views/icons/logo.webp">
    <link rel="preload" href="contenido/views/css/plugins/bootstrap.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </noscript>
    <link rel="preload" href="contenido/views/css/micrositio2.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
</head>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v23.0"></script>

<body>
    <div class="heightBody">
        <?php
            include 'nabvar.html';
        ?>
        <section class="container-fluid divAccesibilidad seccionOpiniones lazy paralaxGris">
            <div class="Convocatoria y Método">
                <div class="d-flex justify-content-start flex-md-wrap flex-wrap espacioLateralCYM espacioCards">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="colorBlack">&nbsp;&nbsp;&nbsp; Revista</h1>
                        </div>
                        <?php
                            foreach( $consultarRevista as $key => $values ){
                                echo '  <div class="cardinicio cardDiseñoInicio ">
                                    <img src="img_revista/'.$values['img'].'" class="card-img-top" alt="Revista"
                                        data-toggle="modal" data-target="#exampleModal'. $key .'">
                                </div>
                                <div class="modal fade" id="exampleModal'. $key .'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close botonClose" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times; </span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div style="position:relative;padding-top:0;width:450px;height:800px;"><iframe style="position:absolute;border:none;width:100%;height:100%;left:0;top:0;" src="'.$values['url'].'" title="Revista" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                    ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include 'footer.html';
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"
        integrity="sha512-72WD92hLs7T5FAXn3vkNZflWG6pglUDDpm87TeQmfSg8KnrymL2G30R7as4FmTwhgu9H7eSzDCX3mjitSecKnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
</body>

</html>