<?php


class ControladorUsuarios {

    static public function ctrMostrarUsuarios() {
        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla);
        return $respuesta;
    }

    static public function ctrContarUsuarios() {
        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::mdlContarUsuarios($tabla);
        return $respuesta;
    }

    static public function ctrContarUsuariosActivos() {
        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::mdlContarUsuariosActivos($tabla);
        return $respuesta;
    }

} // End of class ControladorUsuarios