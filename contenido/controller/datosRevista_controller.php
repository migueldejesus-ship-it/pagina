<?php

class ControladorDatosRevista{

    static public function ctrConsultarRevista(){
        $respuesta = ModeloDatosRevista::mdlConsultarRevistas();

        return $respuesta;
    }


}