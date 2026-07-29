$(document).on("click", ".btnActivarUsuario", function() {
    let boton = $(this);
    let idUsuario = $(this).attr("data-idUsuario");
    let estadoUsuario = $(this).attr("data-estadoUsuario");
    console.log("idUsuario -->", idUsuario);
    console.log("estadoUsuario -->", estadoUsuario);

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
            console.log("respuesta -->", respuesta);
            console.log(boton);

            if (respuesta){
                if (estadoUsuario === "Activo"){
                    boton.removeClass("btn-danger");
                    boton.addClass("btn-success");
                    boton.html("Activo");
                    boton.attr("data-estadoUsuario", "Inactivo");
                }else{
                    boton.removeClass("btn-success");
                    boton.addClass("btn-danger");
                    boton.html("Inactivo");
                    boton.attr("data-estadoUsuario", "Activo");                
                }
            }
        }
    });
});// fin de activar/desactivar usuario