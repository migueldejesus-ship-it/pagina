<?php

class ControladorDatosBoletines{

    static public function ctrBoletinesTres(){
        $respuesta = ModeloDatosBoletines::mdlConsultarBoletinesTres();

        return $respuesta;
    }

    static public function ctrBoletines(){
        $respuesta = ModeloDatosBoletines::mdlConsultarBoletines();

        return $respuesta;
    }

    static public function ctrBoletinConsultado(){
        if( !empty( $_GET["boletin"] ) ){
            $datos = array("id" => $_GET["boletin"]);
            $respuesta = ModeloDatosBoletines::mdlConsutlarBoletin($datos);

            return $respuesta;
        }
        
    }

    static public function ctrTotalBoletinConsultado(){
        $respuesta = ModeloDatosBoletines::mdlTotalBoletinConsultado();

        return $respuesta;
    }

    static public function ctrBoletinConteo(){
        if( !empty( $_GET["boletin"] ) ){
            $datos = array("id" => $_GET["boletin"]);
            $respuesta = ModeloDatosBoletines::mdlBoletinConteo($datos);

            return $respuesta;
        }
        
    }
}
