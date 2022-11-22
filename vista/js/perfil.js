$(document).ready(function() { 
    ajaxVerUsuarios();
})

function ajaxVerUsuarios(){
    $.ajax({
        url: "../controlador/accion/ajax_verUsuarios.php",
        success: function(result){ 
           insertarUsuariosEnTabla(JSON.parse(result))
        },
    error: function(xhr){
        //alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
      }});
}

function ajaxRegistrarUsuario(nombre, correo, password, telefono, fechanac, sexo, pesokg, administrador){
    $.ajax({
        data: { 
                   "nombre" : nombre,
                   "correo" : correo,
                   "password" : password,
                   "telefono" : telefono,
                   "fechanac" : fechanac,
                   "sexo" : sexo,
                   "pesokg" : pesokg,
                   "administrador" : administrador
            },
            type: "POST",
            dataType: "json",
            url: "../controlador/accion/ajax_registrarUsuario.php",
    success: function(result){
        $('#modalCrearUsuario').modal('hide');
        insertarUsuarioEnTabla(nombre, correo, password, telefono, fechanac, sexo, pesokg, administrador);
    }})
}
