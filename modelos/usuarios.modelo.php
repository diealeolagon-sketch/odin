<?php

require_once "conexion.php";

class ModeloUsuarios {


    static public function mdlMostrarUsuarios($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
            return $stmt->fetchAll();
        } // End of mdlMostrarUsuarios


} // End of class ModeloUsuarios