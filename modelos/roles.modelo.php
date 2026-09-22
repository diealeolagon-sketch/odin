<?php

require_once "conexion.php";

class ModeloRoles {

    static public function mdlMostrarPermisos() {
        $stmt = Conexion::conectar()->query("SELECT * FROM permisos ORDER BY modulo, accion");
        return $stmt->fetchAll();
    }

    static public function mdlPermisosDelRol($idRol) {
        $stmt = Conexion::conectar()->prepare("SELECT id_permiso FROM rol_permisos WHERE id_rol = :id_rol");
        $stmt->bindValue(":id_rol", $idRol, PDO::PARAM_INT);
        $stmt->execute();
        return array_map("intval", $stmt->fetchAll(PDO::FETCH_COLUMN));
    }

    static public function mdlGuardarPermisos($idRol, $permisos) {
        $conexion = Conexion::conectar();
        $conexion->beginTransaction();
        try {
            $borrar = $conexion->prepare("DELETE FROM rol_permisos WHERE id_rol = :id_rol");
            $borrar->bindValue(":id_rol", $idRol, PDO::PARAM_INT);
            $borrar->execute();
            $insertar = $conexion->prepare("INSERT INTO rol_permisos (id_rol, id_permiso) VALUES (:id_rol, :id_permiso)");
            foreach (array_unique(array_map("intval", $permisos)) as $idPermiso) {
                $insertar->bindValue(":id_rol", $idRol, PDO::PARAM_INT);
                $insertar->bindValue(":id_permiso", $idPermiso, PDO::PARAM_INT);
                $insertar->execute();
            }
            $conexion->commit();
            return true;
        } catch (Exception $e) {
            $conexion->rollBack();
            return false;
        }
    }

    static public function mdlGuardarRol($datos) {
        $conexion = Conexion::conectar();
        if (!empty($datos["id"])) {
            $stmt = $conexion->prepare("UPDATE roles SET nombre = :nombre, rol = :rol, nivel_acceso = :nivel_acceso, estado = :estado WHERE id_rol = :id");
            $stmt->bindValue(":id", $datos["id"], PDO::PARAM_INT);
        } else {
            $stmt = $conexion->prepare("INSERT INTO roles (nombre, rol, nivel_acceso, estado) VALUES (:nombre, :rol, :nivel_acceso, :estado)");
        }
        $stmt->bindValue(":nombre", $datos["nombre"]);
        $stmt->bindValue(":rol", $datos["rol"]);
        $stmt->bindValue(":nivel_acceso", $datos["nivel_acceso"], PDO::PARAM_INT);
        $stmt->bindValue(":estado", $datos["estado"]);
        return $stmt->execute();
    }

    static public function mdlMostrarRoles($tabla) {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();
        return $stmt->fetchAll();

    } // End of mdlMostrarRoles

} // End of class ModeloRoles