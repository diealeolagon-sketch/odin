<?php


class ControladorUsuarios {

    static public function ctrMostrarUsuarios() {
        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla);
        return $respuesta;
    }

    // static public function ctrActivarUsuario($estado, $id) {
    //     $respuesta = ModeloUsuarios::mdlActivarUsuario( $estado, $id );
    //     return $respuesta;
    // }

} // End of class ControladorUsuarios