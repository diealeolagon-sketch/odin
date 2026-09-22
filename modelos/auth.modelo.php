<?php

require_once "conexion.php";

class ModeloAuth {

    static public function mdlBuscarUsuario($usuario) {
        $stmt = Conexion::conectar()->prepare(
            "SELECT u.id_usuario, u.nombre, u.id_rol, u.estado, u.password, r.nombre AS rol
             FROM usuarios u
             LEFT JOIN roles r ON r.id_rol = u.id_rol
             WHERE u.correo = :usuario OR u.num_identificacion = :usuario
             LIMIT 1"
        );
        $stmt->bindValue(":usuario", $usuario, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    static public function mdlTienePermiso($idRol, $nombrePermiso) {
        $stmt = Conexion::conectar()->prepare(
            "SELECT 1 FROM rol_permisos rp
             INNER JOIN permisos p ON p.id_permiso = rp.id_permiso
             WHERE rp.id_rol = :id_rol AND p.nombre = :permiso LIMIT 1"
        );
        $stmt->bindValue(":id_rol", $idRol, PDO::PARAM_INT);
        $stmt->bindValue(":permiso", $nombrePermiso, PDO::PARAM_STR);
        $stmt->execute();
        return (bool) $stmt->fetchColumn();
    }
}