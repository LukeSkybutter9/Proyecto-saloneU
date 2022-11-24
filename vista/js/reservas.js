$(document).ready(function() { 
    ajaxVerSalones();
    /*var idSalon;
    $("input").click(function(){  
       idSalon = $(this).attr("id");
    });*/
});

function ajaxVerSalones(){
    var nombreSalon = $("#nombreEdificio").val();
    $.ajax({
        data: { 
            "nombreEdificio" : nombreSalon
        },
        type: "POST",
        url: "../controlador/accion/ajax_verSalones.php",
        success: function(result){ 
           insertarSalonesEnTabla(JSON.parse(result))
        },
    error: function(xhr){
        alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
      }});
}

function insertarSalonesEnTabla(result){
    let salones = ''
    $.each(result, function(i) {
        salones +='<tr id='+result[i].idSalon+'>'
        +'<td style="border: 1px solid #dddddd; text-align:center;"><input type="radio" class="salones" id='+result[i].idSalon+' name="selecSalon">'+result[i].ubicacion+'</td>'
        +'<td style="border: 1px solid #dddddd;text-align:center;">'+result[i].estado+'</td>'
        +'</tr>';
    })
    
    $("#salonesRegistrados tbody").append(salones)
}