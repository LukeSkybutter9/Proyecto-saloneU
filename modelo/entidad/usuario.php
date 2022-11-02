<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "adminsu";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("No hay conexión: ".mysqli_connect_error());
}

$usuario = $_POST["usuario"];;
$pass = $_POST["password"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE correo ='".$usuario."' and password'".$pass."'");

$nr = mysqli_num_rows($query);

if($nr==1){
    echo "Bienvenido: " .$nombre
}else{
    ecjo "No ingresó."
}













?>