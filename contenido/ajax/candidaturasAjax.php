<?php

// Bloque de Controladores
require_once "../controller/datosSancionados_controller.php";

// Bloque de Modelos
require_once "../model/datosSancionados_model.php";


class AjaxDatos{

    public function ajaxDatosMapa(){

        $respuesta2 = ControladorDatosSancionados::ctrGBarrasCandidaturas();
        echo json_encode($respuesta2);
    }
}

$objeto = new AjaxDatos();
$objeto -> ajaxDatosMapa();