<?php

class ControladorDependencias {

    static public function ctrGuardarDependencia() {
        if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["nombre"])) {
            return;
        }

        $datos = array(
            "id" => $_POST["id_dependencia"] ?? null,
            "nombre" => trim($_POST["nombre"]),
            "codigo" => trim($_POST["codigo"] ?? ""),
            "descripcion" => trim($_POST["descripcion"] ?? ""),
            "encargado" => trim($_POST["encargado"] ?? ""),
            "estado" => $_POST["estado"] ?? "Activo"
        );

        if (ModeloDependencias::mdlGuardarDependencia($datos)) {
            header("Location: dependencias");
            exit;
        }
    }

    static public function ctrMostrarDependencias() {
        $tabla = "dependencias";
        $respuesta = ModeloDependencias::mdlMostrarDependencias($tabla);
        return $respuesta;
    }   // End of ctrMostrarDependencias
    
}   // End of class ControladorDependencias