<?php

class Conexion {

    static public function conectar() {
        $conexion = new PDO("mysql:host=localhost;dbname=odin_db;charset=utf8mb4", "odin_app", "odin123", array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ));

        $conexion->exec("SET NAMES 'utf8mb4'");

        return $conexion;
    }
}