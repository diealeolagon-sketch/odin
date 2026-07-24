<?php

class Conexion {

    static public function conectar() {
        $conexion = new PDO("mysql:host=localhost;dbname=odin_db", "root", "root");

        $conexion>exec("SET NAMES 'utf8'");

        return $conexion;
    }
}