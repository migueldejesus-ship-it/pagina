<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=127.0.0.1;dbname=paginaweb", "root", "",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);
		return $link;
		// $link = new PDO("mysql:host=127.0.0.1;dbname=ipmpedu_constancias", "ipmpedu_user", "0LvDZ8+*jMR-Njci",
		// 				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		//                       PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		// 				);
		// return $link;
	}
}