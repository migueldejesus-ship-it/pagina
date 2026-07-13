<?php

require_once "conexion.php";

class ModeloDatosBoletines{

    static public function mdlConsultarBoletinesTres(){
        
        $stmt = Conexion::conectar()->prepare("SELECT * FROM boletines  ORDER BY fechaPublicacion DESC LIMIT 3");

        $stmt->execute();

        return $stmt -> fetchAll();

        $stmt -> close();
    }

    static public function mdlConsultarBoletines(){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM boletines  ORDER BY fechaPublicacion DESC");

        $stmt->execute();

        return $stmt -> fetchAll();

        $stmt -> close();
    }

    static public function mdlConsutlarBoletin( $datos ){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM boletines where id = :id");

        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        
        $stmt->execute();

        return $stmt -> fetchAll();

        $stmt -> close();
    }

    static public function mdlTotalBoletinConsultado(){
        $stmt = Conexion::conectar()->prepare("SELECT count(*) as total FROM boletines ");

        $stmt->execute();

        return $stmt -> fetchAll();

        $stmt -> close();
    }

    static public function mdlBoletinConteo( $datos ){
        $stmt = Conexion::conectar()->prepare(" UPDATE boletines SET  boletines.visitas = boletines.visitas + 1 WHERE boletines.id = :id");

        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        
        $stmt->execute();

        return $stmt -> fetchAll();

        $stmt -> close();
    }
}