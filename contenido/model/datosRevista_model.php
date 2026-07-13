<?php

require_once "conexion.php";

class ModeloDatosRevista{

    static public function mdlConsultarRevistas() {
        
        $stmt = Conexion::conectar()->prepare("SELECT * FROM revista ORDER BY id desc");

        $stmt->execute();

        return $stmt -> fetchAll();

        $stmt -> close();
    }
}