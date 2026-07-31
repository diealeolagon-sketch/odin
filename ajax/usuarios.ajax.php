<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class AjaxUsuarios {

    public $idUsuario;
    public $estadoUsuario;

    public function ajaxActivarUsuario() {

        $estadoUsuario = $this->estadoUsuario;
        $id_usuario = $this->idUsuario;

        $respuesta = ControladorUsuarios::ctrActivarUsuario( $estadoUsuario, $id_usuario );       

        echo json_encode($respuesta);
    }

} // End of class AjaxUsuarios


if(isset($_POST["idUsuario"])) {
    $activarUsuario = new AjaxUsuarios();
    $activarUsuario->idUsuario = $_POST["idUsuario"];
    $activarUsuario->estadoUsuario = $_POST["nuevoEstadoUsuario"];
    $activarUsuario->ajaxActivarUsuario();
}
