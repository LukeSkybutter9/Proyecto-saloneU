$(document).ready(function() { 
    ajaxVerHistorial();
});

function ajaxVerHistorial(){
    var nombreSalon = $("#nombreEdificio").val();
    $.ajax({
        data: { 
            "nombreEdificio" : nombreSalon
        },
        type: "POST",
        url: "../controlador/accion/ajax_verHistorial.php",
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
        Historial +='<tr id='+result[i].idSalon+'>'
        +'<td style="border: 1px solid #dddddd;text-align:center;"><input type="radio" class="Historial" id='+result[i].idSalon+' name="selecSalon">'+result[i].ubicacion+'</td>'
        +'<td style="border: 1px solid #dddddd;text-align:center;">'+result[i].estado+'</td>'
        +'</tr>';
    })
    
    $("#HistorialRegistrados tbody").append(Historial)
}
