<?php
date_default_timezone_set("America/Caracas");
setlocale(LC_TIME, 'es_VE.UTF-8','esp');
// Bloque de Controladores
require_once "contenido/controller/datosBoletines_controller.php";

// Bloque de Modelos
require_once "contenido/model/datosBoletines_model.php";

$totalboletin = ControladorDatosBoletines::ctrTotalBoletinConsultado();
$consultarBoletin= ControladorDatosBoletines::ctrBoletinConsultado();
$nuevoConteo = ControladorDatosBoletines::ctrBoletinConteo();


?>


<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta name="theme-color" />
    <meta content="text/html; X-Content-Type-Options=nosniff; charset=UTF-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="Instituto de Profesionalización del Magisterio Poblano" />
    <meta name="author" content="Instituto de Profesionalización del Magisterio Poblano,ipmp" />
    <meta name="copyright" content="Instituto de Profesionalización del Magisterio Poblano" />
    <meta name="robots" content="index" />
    <title>Instituto de Profesionalización del Magisterio Poblano</title>
    <script src='https://code.jquery.com/jquery-3.4.1.min.js' type='text/javascript'></script>
    <link rel="shortcut icon" href="/pagina/contenido/views/img/favicon.ico">
    <link rel="apple-touch-icon" href="/pagina/contenido/views/icons/logo.webp">
    <link rel="preload" href="/pagina/contenido/views/css/plugins/bootstrap.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </noscript>
    <link rel="preload" href="/pagina/contenido/views/css/micrositio2.css" as="style"
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
                        <?php
                            if( !empty( $_GET["boletin"])){
                                $fecha = strtotime($consultarBoletin[0]['fechaPublicacion']);
                                    echo '<center>
                                         <div class="col-md-8">
                                            <img src="/pagina/'. $consultarBoletin[0]['urlImagenPrincipal'] .'" class="w-100" alt="noticias1">
                                            <p class="colorBlack letraBoletines marginTop1rem"><i class="fa-solid fa-calendar iconosBoletines"></i> &nbsp; '. strftime('%d de %B de %Y', $fecha) .' &nbsp; <i class="fa-solid fa-eye iconosBoletines"></i>  '. $consultarBoletin[0]['visitas'] .'  </p>
                                         </div>
                                         <div class="col-md-8 pr-sm-5 pt-5">
                                            <p class="colorBlackJustify letraBoletines"><b> '. $consultarBoletin[0]['comunicado'] .'</b></p>
                                        </div>
                                         <div class="col-md-8 pr-sm-5 pt-5">
                                            <h1 class="colorBlackJustify letraBoletines">'. $consultarBoletin[0]['titulo'] .'</h1>
                                        </div>
                                         <div class="col-md-8 pr-sm-5 pt-5">
                                            <p class="colorBlackJustify letraBoletines"><b> '. $consultarBoletin[0]['resumen'] .'</b></p>
                                        </div>

                                        <div class="col-md-8">
                                            <p class="colorBlackJustify letraBoletines"> '. $consultarBoletin[0]['contenido'] .' </p>
                                        </div>
                                        </center>';
                                    if($totalboletin[0]['total'] > $consultarBoletin[0]['id']){
                                      echo '<div class="col-md-6 button-container">
                                        <center>
                                            <a href="'. $consultarBoletin[0]['id'] + 1  .'" > 
                                                <button class="button -regular"> Siguiente</button> 
                                            </a>
                                        </center>
                                    </div>';
                                    }
                                    if($consultarBoletin[0]['id'] != 1){
                                        echo '<div class="col-md-6 button-container">
                                        <center>
                                            <a href="'. $consultarBoletin[0]['id'] -1  .'" > 
                                                <button class="button -regular"> Anterior</button>
                                            </a>
                                        </center>
                                    </div>';
                                    }
                                    
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
<style>
    /* // colors */
    :root {
        --color-dark: #161616;
        --color-ocean: #416dea;
        --color-grass: #3dd28d;
        --color-snow: #ffffff;
        --color-salmon: #f32c52;
        --color-sun: #feee7d;
        --color-alge: #7999a9;
        --color-flower: #353866;
        --color-smoke: #e4e4e4;

        --borderRadius: 36px;

        --font-face: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
            Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    }
    .button-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* // button styles */
    .button {
        display: flex;
        overflow: hidden;

        margin: 10px;
        padding: 12px 12px;

        cursor: pointer;
        user-select: none;
        transition: all 150ms linear;
        text-align: center;
        white-space: nowrap;
        text-decoration: none !important;
        text-transform: none;
        text-transform: capitalize;

        color: #fff;
        border: 0 none;
        border-radius: 36px !important;

        font-size: 13px;
        font-weight: 500;
        line-height: 1.3;

        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;

        justify-content: center;
        align-items: center;
        flex: 0 0 160px;

        box-shadow: 2px 5px 10px var(--color-smoke);

        &:hover {
            transition: all 150ms linear;

            opacity: 0.85;
        }

        &:active {
            transition: all 150ms linear;
            opacity: 0.75;
        }

        &:focus {
            outline: 1px dotted #959595;
            outline-offset: -4px;
        }
    }

    .button.-regular {
        color: #202129;
        background-color: #f2f2f2;

        &:hover {
            color: #202129;
            background-color: #e1e2e2;
            opacity: 1;
        }

        &:active {
            background-color: #d5d6d6;
            opacity: 1;
        }
    }
</style>