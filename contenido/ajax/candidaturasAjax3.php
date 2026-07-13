<?php

// Bloque de Controladores
require_once "../controller/datosSancionados_controller.php";

// Bloque de Modelos
require_once "../model/datosSancionados_model.php";


class AjaxDatos{

    public function ajaxDatosMapa(){

        $respuesta = ControladorDatosSancionados::ctrPastelCandidaturas();
        echo json_encode($respuesta);
        
    }
}

$objeto = new AjaxDatos();
$objeto -> ajaxDatosMapa();