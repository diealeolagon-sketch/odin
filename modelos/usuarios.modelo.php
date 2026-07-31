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

    static public function mdlActivarUsuario( $estadoUsuario, $idUsuario) {
        $stmt = Conexion::conectar()->prepare("UPDATE usuarios SET estado = :estado WHERE id_usuario = :id");

        $stmt->bindParam(":estado", $estadoUsuario, PDO::PARAM_STR);
        $stmt->bindParam(":id", $idUsuario, PDO::PARAM_STR);

        if ($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }//fin del metosd mdlActivarUsuario

    static public function mdlContarUsuarios($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) as total FROM $tabla");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } // End of mdlContarUsuarios

    static public function mdlContarUsuariosActivos($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) as total FROM $tabla WHERE estado = 'Activo'");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } // End of mdlContarUsuariosActivos

    static public function mdlContarUsuariosInactivos($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) as total FROM $tabla WHERE estado = 'Inactivo'");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } // End of mdlContarUsuariosInactivos


} // End of class ModeloUsuarios