$(document).ready(function() { 
    ajaxVerSalones();
})

function ajaxVerSalones(){
    $.ajax({
        url: "../controlador/accion/ajax_verSalones.php",
        success: function(result){ 
           insertarSalonesEnTabla(JSON.parse(result))
        },
    error: function(xhr){
        //alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
      }});
}

function insertarSalonesEnTabla(result){
    let salones = ''
    $.each(result, function(i) {
        salones +='<tr id='+result[i].id+'>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].ubicacion+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].capacidad+'</td>'
        +'</tr>'

    })

    $("#salonesRegistrados tbody").append(salones)
}
