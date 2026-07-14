<?php
// Bloque de Controladores
require_once "contenido/controller/datosBoletines_controller.php";

// Bloque de Modelos
require_once "contenido/model/datosBoletines_model.php";

$consultarBoletines= ControladorDatosBoletines::ctrBoletinesTres();

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
    <link rel="preload" href="contenido/views/css/micrositio2.css" as="style"onload="this.onload=null;this.rel='stylesheet'">
</head>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v23.0"></script>

<body>
    <div class="heightBody">
        <?php
            include 'nabvar.html';
        ?>
        <section id="principalCarousel" class="carousel slide carousel-dark headline divAccesibilidad"
            data-bs-ride="carousel">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="contenido/views/img/1.1.jpg" class="w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="contenido/views/img/2.1.jpg" class="w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <div style="max-width: 1140px; margin: 2rem auto; padding: 0 15px; font-family: sans-serif;">
            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; margin-bottom: 3rem;">
                <div style="flex: 1; min-width: 280px; max-width: 540px; text-center;">
                    <a href="https://ipmp.edu.mx" style="display: block; background-color: #3c4e4e; color: #ffffff; text-decoration: none; padding: 18px 24px; font-size: 15px; border-radius: 4px; text-align: center; line-height: 1.4; font-weight: 500;"> Resultados del proceso de admisión Maestría en Innovación Educativa</a>
                </div>
                <div style="flex: 1; min-width: 280px; max-width: 540px; text-center;">
                    <a href="https://ipmp.edu.mx"style="display: block; background-color: #3c4e4e; color: #ffffff; text-decoration: none; padding: 18px 24px; font-size: 15px; border-radius: 4px; text-align: center; line-height: 1.4; font-weight: 500;">Resultados del proceso de admisión Doctorado en Innovación Educativa </a>
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <div style="min-width: 250px; max-width: 400px;">
                    <a href="https://ipmp.edu.mx" id="btn-1776382831436"style="display: block; background-color: #3c4e4e; color: #ffffff; text-decoration: none; padding: 12px 24px; font-size: 15px; border-radius: 4px; text-align: center; line-height: 1.4; font-weight: 500;">Mi desempeño académico</a>
                </div>
            </div>
        </div>
  <section class="container-fluid divAccesibilidad seccionOpiniones lazy paralaxVerde">
            <div class="Convocatoria y Método">
                <div class="d-flex justify-content-start flex-md-wrap flex-wrap espacioLateralCYM espacioCards">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xl-3">
                            <center>
                                <a href="cursos">
                                    <div class="card cardinicio cardDiseñoInicio ">
                                        <img src="contenido/views/img/cursos.webp" class="card-img-top" alt="cursos">
                                    </div>
                                </a>
                            </center>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-3">
                            <center>
                                <a href="posgrados">
                                    <div class="card cardinicio cardDiseñoInicio ">
                                        <img src="contenido/views/img/posgrados.webp" class="card-img-top"
                                            alt="Posgrados">
                                    </div>
                                </a>
                            </center>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-3">
                            <center>
                                <a href="noticias">
                                    <div class="card cardinicio cardDiseñoInicio ">
                                        <img src="contenido/views/img/boletines.webp" class="card-img-top"
                                            alt="Boletines">
                                    </div>
                                </a>
                            </center>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-3">
                            <center>
                                <div class="card cardinicio cardDiseñoInicio ">
                                    <img src="contenido/views/img/revista.webp" class="card-img-top" alt="Revista"
                                        data-toggle="modal" data-target="#exampleModal">
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Convocatoria y Método paddingTop6rem">
                <div class="d-flex justify-content-start flex-md-wrap flex-wrap espacioLateralCYM espacioCards">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xl-3 px-0 pr-sm-5 pb-5">
                            <center>
                                <div class="fb-page" data-href="https://www.facebook.com/IPMPProfesionalizacionDocente"
                                    data-tabs="timeline" data-width="500" data-height="700" data-small-header="false"
                                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/IPMPProfesionalizacionDocente"
                                        class="fb-xfbml-parse-ignore"><a
                                            href="https://www.facebook.com/IPMPProfesionalizacionDocente">Instituto de
                                            Profesionalización del Magisterio Poblano</a></blockquote>
                                </div>
                            </center>
                        </div>
                        <div class="col-xl-1">

                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-8 px-0 pr-sm-5 pb-5">
                            <img class="imagen95" src="contenido/views/img/13.jpg" alt="Mensaje de de bienvenida">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close botonClose" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div style="position: relative; padding-top: 0; width: 460px; height: 550px;"><iframe
                                    style="position: absolute; border: none; width: 100%; height: 100%; left: 0; top: 0;"
                                    src="https://online.fliphtml5.com/mkroc/jdsb/" width="300" height="150"
                                    frameborder="0" scrolling="no" seamless="seamless"
                                    allowfullscreen="allowfullscreen"></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid divAccesibilidad seccionOpiniones lazy paralaxGris">
            <div class="Convocatoria y Método">
                <div class="d-flex justify-content-start flex-md-wrap flex-wrap espacioLateralCYM espacioCards">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="colorBlack">&nbsp;&nbsp;&nbsp; Noticias</h1>
                        </div>
                        <?php 
                           echo ' 
                        <div class="col-sm-12 col-md-12 col-xl-4">
                        <center>
                            <a href=" boletin/'.   $consultarBoletines[0]['id'] .'  " >
                                <div class="card cardDiseño ">
                                     <img src="'. $consultarBoletines[0]['urlImagenBanner'] .'" class="card-img-top" alt="noticias1">
                                    <div class="card-body">
                                        <h5 class="colorBlackLeft">'. $consultarBoletines[0]['titulo'] .'</h5>
                                    </div>
                                </div>
                            </a>
                        </center>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-4">
                            <center>
                                <a href=" boletin/'.   $consultarBoletines[1]['id'] .'  " >
                                    <div class="card cardDiseño ">
                                        <img src="'. $consultarBoletines[1]['urlImagenBanner'] .'" class="card-img-top" alt="noticias2">
                                        <div class="card-body">
                                            <h5 class="colorBlackLeft"> '. $consultarBoletines[1]['titulo'] .' </h5>
                                        </div>
                                    </div>
                                </a>
                            </center>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-4">
                            <center>
                                <a href=" boletin/'.   $consultarBoletines[2]['id'] .'  " >
                                    <div class="card cardDiseño ">
                                        <img src="'. $consultarBoletines[2]['urlImagenBanner'] .'" class="card-img-top" alt="noticias3">
                                        <div class="card-body">
                                            <h5 class="colorBlackLeft">'. $consultarBoletines[2]['titulo'] .'</h5>
                                        </div>
                                    </div>
                                </a>
                            </center>
                        </div>';
                            ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid divAccesibilidad seccionOpiniones lazy paralaxVerdeClaro">
            <div class="Convocatoria y Método">
                <div class="d-flex justify-content-start flex-md-wrap flex-wrap espacioLateralCYM espacioCards">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-xl-3 p-3 mb-2">
                            <center><i class="fa-solid fa-location-dot colorWhite"></i>
                                <p class="colorWhite"> Dirección </p>
                                <span class="colorWhite">
                                    Calle 35 Norte No. 3626 C.P. 72070 Col. Ex Rancho Colorado, Puebla, Pue.
                                </span>
                            </center>
                        </div>
                        <div class="col-sm-12 col-md-4 col-xl-3 p-3 mb-2">
                            <center> <i class="fa-regular fa-envelope colorWhite"></i>
                                <p class="colorWhite"> Correo Electrónico </p>
                                <span class="colorWhite">ipmp@seppue.gob.mx</span>
                            </center>
                        </div>
                        <div class="col-sm-12 col-md-4 col-xl-3 p-3 mb-2">
                            <center> <i class="fa-solid fa-phone colorWhite"></i>
                                <p class="colorWhite"> Teléfono </p> <span class="colorWhite"> +52(222)
                                    2318902</span>
                            </center>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-3 p-3 mb-2">
                            <center>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.796500040279!2d-98.21126682396675!3d19.072682882131325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc139b1b09c85%3A0xf7756792a527eecb!2sInstituto%20de%20Profesionalizaci%C3%B3n%20del%20Magisterio%20Poblano!5e0!3m2!1ses!2smx!4v1753378381666!5m2!1ses!2smx"
                                    width="300" height="300" class="border0" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </center>
                        </div>
                        <div>
                            <center>
                                <h3 class="colorWhite">Campaña contra la Corrupción</h3>
                            </center>
                            <div style="max-width: 500px; margin: 0 auto;">
                                <div id="carouselExampleInterval" class="carousel slide carousel-dark headline divAccesibilidad" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="5000">
                                            <div class="ratio ratio-16x9">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/6yMsAKPA9bw?si=L8eNTulbMq2OpDNk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="contenido/views/img/Corrupcion.1.jpeg" class="w-100">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="contenido/views/img/Corrupcion.2.jpeg" class="w-100" >
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="contenido/views/img/Corrupcion.3.jpeg" class="w-100" >
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="contenido/views/img/Corrupcion.4.jpeg" class="w-100">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="contenido/views/img/Corrupcion.5.jpeg" class="w-100">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="contenido/views/img/Corrupcion.6.jpeg" class="w-100">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="contenido/views/img/Corrupcion.7.jpeg" class="w-100">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="contenido/views/img/Corrupcion.8.jpeg" class="w-100">
                                            </div> 
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>  
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-6 margin10rem">
                            <center>
                                <a href="https://www.plataformadetransparencia.org.mx/">
                                    <img src="contenido/views/img/portal_pnt.webp" alt="pnt ipmp">
                                </a>
                            </center>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-6 margin10rem">
                            <center>
                                <a
                                    href="https://consultapublicamx.plataformadetransparencia.org.mx/vut-web/?idSujetoObigadoParametro=16350&idEntidadParametro=21&idSectorParametro=21">
                                    <img src="contenido/views/img/portal_pnt_ipmp.webp" alt="pnt ipmp">
                                </a>
                            </center>
                        </div>
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