document.getElementById('actualizar').addEventListener('click',function(){
    let elementoActivo = document.querySelector('input[name="selecSalon"]:checked');
    /*if(elementoActivo) {
        alert(elementoActivo.id);
        $("#radioSalon").append(elementoActivo.id);
    } else {
        alert('No hay ninún elemento activo');
    }
    */
    var numeroCheck = elementoActivo.id;
    $('.radioSalon').val(numeroCheck);
});