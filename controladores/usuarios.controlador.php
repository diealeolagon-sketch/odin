<?php


class ControladorUsuarios {

    static public function ctrMostrarUsuarios() {
        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla);
        return $respuesta;
    }

    static public function ctrActivarUsuario($estadoUsuario, $id_usuario) {
        $respuesta = ModeloUsuarios::mdlActivarUsuario( $estadoUsuario, $id_usuario);
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

    static public function ctrCrearUsuario() {
        if (isset($_POST["nuevoNombre"])) {
            $tabla = "usuarios";
            $datos = array(
                "tipo_documento" => $_POST["nuevoTipoDocumento"],
                "numero_identificacion" => $_POST["nuevoNumeroIdentificacion"],
                "nombre" => $_POST["nuevoNombre"],
                "correo" => $_POST["nuevoCorreo"],
                "rol" => $_POST["nuevoRol"],
                "dependencia" => $_POST["nuevaDependencia"],
                "direccion" => $_POST["nuevaDireccion"],
                "telefono" => $_POST["nuevoTelefono"],
                "estado" => "Activo",
                "password" => $_POST["nuevoNumeroIdentificacion"]
            );

            $respuesta = ModeloUsuarios::mdlCrearUsuario($tabla, $datos);
            if ($respuesta == "ok") {
                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "¡El usuario ha sido creado correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "gestion_usuarios";
                        }
                    });
                </script>';
            } else {
                echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "¡Error al crear el usuario!",
                        text: "Por favor, inténtelo de nuevo.",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    });
                </script>';
            }

        }

    }    

} // End of class ControladorUsuarios