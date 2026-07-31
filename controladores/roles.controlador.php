<?php


class ControladorRoles {

    static public function ctrMostrarRoles() {
        $tabla = "roles";
        $respuesta = ModeloRoles::mdlMostrarRoles($tabla);
        return $respuesta;
    } // End of ctrMostrarRoles

} // End of class ControladorRoles