function entrar(){
    var user = document.getElementById('usuario').value;
    var contr = document.getElementById('contraseña').value;

    if(user == 'Admin' && contr== '12345'){
        alert("Bienvenido");
        window.location.href = "index.html";
    }else{
        alert("Ingresa un usuario y contraseña correcto...");
    }
}

function cerrarSesion(){
    alert("Cerrando Sesion!");
    window.location = "index.html";
}