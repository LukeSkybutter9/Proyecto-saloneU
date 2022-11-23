$(document).ready(function() { 
    ajaxVerUsuario();
    var idSalon;
    $("input").click(function(){  
       idSalon = $(this).attr("id");
    });
});


function ajaxVerUsuario(){
    $.ajax({
        data: { 
            "nombreEstudiante" : nombreSalon
        },
        url: "../controlador/accion/ajax_verUsuario.php",
        success: function(result){ 
           insertarUsuarioEnTabla(JSON.parse(result))
        },
    error: function(xhr){
        alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
      }});
}

function insertarUsuarioEnTabla(result){
    let usuarios = ''

    $.each(result, function(i) {
     
        usuarios +='<tr id='+result[i].id+'>'
        +'<td width="100"  style=" border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].codEdst+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].nombre+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].correo+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].password+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].telefono+'</td>'
        +'<td width="10" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].sexo+'</td>'
        +'<td width="150" style="border: 1px solid #dddddd; text-align: left;padding: 8px;"><a href="#" class="editar mr-3 btn btn-info btn-md" role="button" aria-pressed="true">Editar</a>'
        +'<a href="../controlador/accion/act_eliminarUsuario.php?idUsuario='+result[i].id+'" class="btn btn-danger btn-md" role="button" aria-pressed="true">Eliminar</a></td>'
        +'</tr>'

    })

    $("#usuariosRegistrados tbody").append(usuarios)

}