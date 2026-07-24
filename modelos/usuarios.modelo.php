<?php

require_once "conexion.php";

class ModeloUsuarios {


    static public function mdlMostrarUsuarios($tabla) {
        // $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt = Conexion::conectar()->prepare("SELECT u.id_usuario,
                                                u.nombre,
                                                u.num_identificacion,
                                                r.nombre as rol,
                                                d.nombre as dependencia,
                                                u.estado
                                                FROM usuarios u
                                                JOIN roles r ON r.id_rol = u.id_rol
                                                JOIN dependencias d ON d.id_dependencia = u.id_dependencia");


        $stmt->execute();
            return $stmt->fetchAll();
        } // End of mdlMostrarUsuarios


} // End of class ModeloUsuarios