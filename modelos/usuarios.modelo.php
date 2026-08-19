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


    static public function mdlCrearUsuario($tabla, $datos) {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (tipo_identificacion, num_identificacion, nombre, correo, id_rol, id_dependencia, estado, password, direccion, telefono) VALUES (:tipo_documento, :numero_identificacion, :nombre, :correo, :rol, :dependencia, :estado, :password, :direccion, :telefono)");
        error_log("Datos recibidos en mdlCrearUsuario: " . print_r($datos, true));

        $stmt->bindParam(":tipo_documento", $datos["tipo_documento"], PDO::PARAM_STR);
        $stmt->bindParam(":numero_identificacion", $datos["numero_identificacion"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":rol", $datos["rol"], PDO::PARAM_INT);
        $stmt->bindParam(":dependencia", $datos["dependencia"], PDO::PARAM_INT);
        $stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    } // End of mdlCrearUsuario

} // End of class ModeloUsuarios