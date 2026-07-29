

$(document).on("click", ".btnActivarUsuario", function() {
    // converitimos en numero el total de usuarios activos que tenemos en la base de datos, para luego restarle 1 si el usuario se desactiva, o sumarle 1 si el usuario se activa. Esto nos permite mantener actualizado el contador de usuarios activos en tiempo real sin necesidad de recargar la página.
    let totalUsuariosActivos = parseInt($("#totalUsuariosActivos").html());
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
                    totalUsuariosActivos++;
                    $("#totalUsuariosActivos").html(totalUsuariosActivos);

                }else{
                    boton.removeClass("btn-success");
                    boton.addClass("btn-danger");
                    boton.html("Inactivo");
                    boton.attr("data-estadoUsuario", "Activo"); 
                    totalUsuariosActivos--;
                    $("#totalUsuariosActivos").html(totalUsuariosActivos);
                }
            }
        }
    });
});// fin de activar/desactivar usuario