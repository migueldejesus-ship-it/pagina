<?php

class ControladorDatosSancionados{

	static public function ctrBuscarPersona(){
		if(!empty($_GET["constancia"])){
			$datos = array( "id" => $_GET["constancia"] );
			$respuesta = ModeloDatosSancionados::mdlConsultarPersonal($datos);

			return $respuesta;
		}
	}
}