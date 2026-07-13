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
        <section class="container-fluid divAccesibilidad paralaxObjetivo">
            <div class="Convocatoria y Método">
                <div class="d-flex justify-content-start flex-md-wrap flex-wrap espacioLateralCYM">
                    <div class="col-md-12 my-5">
                        <div class="col-md-12 center my-3">
                            <h2 class="colorBlack">Cuenta pública</h2>
                        </div>
                        <section>
                            <div class="container py-5">
                                <div class="main-timeline">
                                    <div class="timeline left">
                                        <div class="card contorno ">
                                            <div class="card-body p-4">
                                                <a class="colorA" href="2025/cuentaPublica/2017/CUENTA-PUBLICA-2017-IPMP.pdf" target="_blank">
                                                    <h3>2017</h3>
                                                    <p class="mb-0">Consultar Cuenta Pública 2017</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline right">
                                        <div class="card contorno ">
                                            <div class="card-body p-4">
                                                <a class="colorA" href="2025/cuentaPublica/2018/cuentapublica_2018.pdf" target="_blank">
                                                    <h3>2018</h3>
                                                    <p class="mb-0">Consultar Cuenta Pública 2018</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
    .colorA{
        color: black;
    }
    .colorA:hover{
        color: #c6bfa8;
    }
    .contorno {
        box-shadow: 1px 1px 1px 1px #8b8b8b;
        border-radius: 14px;
        margin-bottom: 1rem;
    }

    .main-timeline {
        position: relative !important;
    }

    /* The actual timeline (the vertical ruler) */
    .main-timeline::after {
        content: "" !important;
        position: absolute !important;
        width: 6px !important;
        background-color: #939597 !important;
        top: 0 !important;
        bottom: 0 !important;
        left: 50% !important;
        margin-left: -3px !important;
    }

    /* Container around content */
    .timeline {
        position: relative !important;
        background-color: inherit !important;
        width: 50% !important;
        margin: 0px !important;
    }

    /* The circles on the timeline */
    .timeline::after {
        content: "" !important;
        position: absolute !important;
        width: 25px !important;
        height: 25px !important;
        right: -13px !important;
        background-color: #3c4e4e !important;
        border: 5px solid #c6bfa8 !important;
        top: 15px !important;
        border-radius: 50% !important;
        z-index: 1 !important;
    }

    .timeline::before {
        background-color: transparent !important;
    }

    /* Place the container to the left */
    .left {
        padding: 0px 40px 0px 0px !important;
        left: 0 !important;
    }

    /* Place the container to the right */
    .right {
        padding: 0px 0px 0px 40px !important;
        left: 50% !important;
    }

    .right::after {
        left: -12px !important;
    }

    /* Media queries - Responsive timeline on screens less than 600px wide */
    @media screen and (max-width: 600px) {

        /* Place the timelime to the left */
        .main-timeline::after {
            left: 31px !important;
        }

        /* Full-width containers */
        .timeline {
            width: 100% !important;
            padding-left: 70px !important;
            padding-right: 25px !important;
        }

        /* Make sure that all arrows are pointing leftwards */
        .timeline::before {
            left: 60px !important;
            border: medium solid white !important;
            border-width: 10px 10px 10px 0 !important;
            border-color: transparent white transparent transparent !important;
        }

        /* Make sure all circles are at the same spot */
        .left::after,
        .right::after {
            left: 18px !important;
        }

        .left::before {
            right: auto !important;
        }

        /* Make all right containers behave like the left ones */
        .right {
            left: 0% !important;
        }
    }
</style>