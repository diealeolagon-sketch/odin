<?php


class ControladorUsuarios {

    static public function ctrMostrarUsuarios() {
        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla);
        return $respuesta;
    }

} // End of class ControladorUsuarios