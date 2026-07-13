<?php

// Bloque de Controladores
require_once "../controller/datosSancionados_controller.php";

// Bloque de Modelos
require_once "../model/datosSancionados_model.php";


class AjaxDatos{

    public function ajaxDatosMapa(){

        $respuesta1 = ControladorDatosSancionados::ctrMapaCandidaturas();
        echo json_encode($respuesta1);
    }
}

$objeto = new AjaxDatos();
$objeto -> ajaxDatosMapa();