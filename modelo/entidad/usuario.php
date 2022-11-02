<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bddsu";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("No hay conexión: ".mysqli_connect_error());
}

$usuario = $_POST["usuario"];;
$pass = $_POST["password"];

$query = mysqli_query($conn,"SELECT * FROM usuario WHERE correo ='".$usuario."' and password ='".$pass."'");

$nr = mysqli_num_rows($query);

if($nr==1){
    header("Location: ../../vista/principal.html");
}else{
    header("Location: ../../vista/login.html");
}













?>