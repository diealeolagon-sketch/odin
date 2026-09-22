<?php

require_once "conexion.php";

class ModeloDependencias {

    static public function mdlMostrarDependencias($tabla) {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();
        return $stmt->fetchAll();

    } // End of mdlMostrarDependencias

    static public function mdlGuardarDependencia($datos) {
        $conexion = Conexion::conectar();
        if (!empty($datos["id"])) {
            $stmt = $conexion->prepare("UPDATE dependencias SET nombre = :nombre, codigo = :codigo, descripcion = :descripcion, encargado = :encargado, estado = :estado WHERE id_dependencia = :id");
            $stmt->bindValue(":id", $datos["id"], PDO::PARAM_INT);
        } else {
            $stmt = $conexion->prepare("INSERT INTO dependencias (nombre, codigo, descripcion, encargado, estado) VALUES (:nombre, :codigo, :descripcion, :encargado, :estado)");
        }
        $stmt->bindValue(":nombre", $datos["nombre"]);
        $stmt->bindValue(":codigo", $datos["codigo"]);
        $stmt->bindValue(":descripcion", $datos["descripcion"]);
        $stmt->bindValue(":encargado", $datos["encargado"]);
        $stmt->bindValue(":estado", $datos["estado"]);
        return $stmt->execute();
    }

} // End of class ModeloDependencias