<?php

class ControladorDependencias {

    static public function ctrMostrarDependencias() {
        $tabla = "dependencias";
        $respuesta = ModeloDependencias::mdlMostrarDependencias($tabla);
        return $respuesta;
    }   // End of ctrMostrarDependencias
    
}   // End of class ControladorDependencias