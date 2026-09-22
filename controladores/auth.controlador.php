<?php

class ControladorAuth {

    static public function ctrLogin() {
        $error = null;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario = trim($_POST["usuario"] ?? "");
            $password = $_POST["password"] ?? "";
            $registro = ModeloAuth::mdlBuscarUsuario($usuario);

            if ($registro && $registro["estado"] === "Activo" && self::verificarPassword($password, $registro["password"])) {
                session_regenerate_id(true);
                $_SESSION["usuario"] = array(
                    "id_usuario" => $registro["id_usuario"],
                    "nombre" => $registro["nombre"],
                    "id_rol" => $registro["id_rol"],
                    "rol" => $registro["rol"]
                );
                header("Location: inicio");
                exit;
            }

            $error = "Las credenciales no son válidas o el usuario está inactivo.";
        }

        require "vistas/login.php";
    }

    static private function verificarPassword($password, $almacenada) {
        if (password_get_info($almacenada)["algo"] !== 0) {
            return password_verify($password, $almacenada);
        }

        return hash_equals((string) $almacenada, (string) $password);
    }

    static public function ctrCerrarSesion() {
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), "", time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
        }
        session_destroy();
        header("Location: ./");
        exit;
    }

    static public function ctrTienePermiso($permiso) {
        if (empty($_SESSION["usuario"])) {
            return false;
        }
        if (in_array(strtolower($_SESSION["usuario"]["rol"] ?? ""), array("admin", "administrador"), true)) {
            return true;
        }
        return ModeloAuth::mdlTienePermiso((int) $_SESSION["usuario"]["id_rol"], $permiso);
    }
}