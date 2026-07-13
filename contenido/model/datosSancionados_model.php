<?php

require_once "conexion.php";

class ModeloDatosSancionados{

	static public function mdlConsultarPersonal($datos){

		$stmt = Conexion::conectar()->prepare("SELECT folio,nombreParticipante,instituto,nombreAccion,tipoFormacion,duracionHoras,fechaRealizacion  from personas  WHERE idconstancia = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}  
}