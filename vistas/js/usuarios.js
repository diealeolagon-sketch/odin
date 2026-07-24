$(document).on("click", ".btnActivarUsuario", function() {

    let idUsuario = $(this).attr("data-idUsuario");
    let estadoUsuario = $(this).attr("data-estadoUsuario");
    console.log("idUsuario", idUsuario);
    console.log("estadoUsuario", estadoUsuario);

    let datos = new FormData();
    datos.append("idUsuario", idUsuario);
    datos.append("nuevoEstadoUsuario", estadoUsuario);

    $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            console.log("respuesta", respuesta);
        }
    });
});
// fin de activar/desactivar usuario