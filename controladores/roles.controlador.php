<?php


class ControladorRoles {

    static public function ctrGuardarRol() {
        if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["nombre"])) {
            return;
        }
        $datos = array(
            "id" => $_POST["id_rol"] ?? null,
            "nombre" => trim($_POST["nombre"]),
            "rol" => trim($_POST["rol"] ?? "usuario"),
            "nivel_acceso" => (int) ($_POST["nivel_acceso"] ?? 1),
            "estado" => $_POST["estado"] ?? "Activo"
        );
        if (ModeloRoles::mdlGuardarRol($datos)) {
            header("Location: roles_permisos");
            exit;
        }
    }

    static public function ctrMostrarPermisos() {
        return ModeloRoles::mdlMostrarPermisos();
    }

    static public function ctrPermisosDelRol($idRol) {
        return ModeloRoles::mdlPermisosDelRol($idRol);
    }

    static public function ctrGuardarPermisos() {
        if ($_SERVER["REQUEST_METHOD"] !== "POST" || empty($_POST["id_rol"])) {
            return;
        }
        ModeloRoles::mdlGuardarPermisos((int) $_POST["id_rol"], $_POST["permisos"] ?? array());
    }

    static public function ctrMostrarRoles() {
        $tabla = "roles";
        $respuesta = ModeloRoles::mdlMostrarRoles($tabla);
        return $respuesta;
    } // End of ctrMostrarRoles

    static public function ctrMostrarRol($idRol) {
        return ModeloRoles::mdlMostrarRol((int) $idRol);
    }

} // End of class ControladorRoles