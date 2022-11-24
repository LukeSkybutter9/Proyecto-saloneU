document.getElementById('actualizar').addEventListener('click',function(){
    let elementoActivo = document.querySelector('input[name="selecSalon"]:checked');
    
    var numeroCheck = elementoActivo.id;
    $('.radioSalon').val(numeroCheck);
});