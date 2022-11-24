$(document).ready(function() { 
    ajaxVerHistorial();
});

function ajaxVerHistorial(){
    $.ajax({
        url: "../controlador/accion/ajax_verHistorialReserva.php",
        success: function(result){ 
            insertarHistorialEnTabla(JSON.parse(result))
        },
    error: function(xhr){
        alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
    }});
}

function insertarHistorialEnTabla(result){
    let Historial = ''
    $.each(result, function(i) {
        Historial +='<tr id='+result[i].idReserva+'>'
        +'<td style="text-align:center;font-weight: bold;">RESERVA-'+result[i].idReserva+'</td>'
        +'<td style="text-align:center;font-weight: bold;">'+result[i].fecha+'</td>'
        +'<td style="text-align:center;font-weight: bold;">'+result[i].asunto+'</td>'
        +'</tr>';
    })
    
    $("#reservasRegistradas tbody").append(Historial)
}
