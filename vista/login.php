<?php
   $msg = $_GET['msg'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Salones</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/escudo unimag.png">
    <script type="text/javascript" src="vista/js/main.js"></script>
</head>
<body background="img/fondogrisclaro.jpg">
    <header>
        <nav>
            <a href="https://www.unimagdalena.edu.co">
            <img id="imgEscudo" src="img/escudo unimag.png" alt="">
            <div id="logo" id="columnear">
                <h2 id="uTexto">UNIVERSIDAD DEL</h2>
                <h1 id="magdalenaTexto">MAGDALENA</h1>
            </div>
            </a>
            <div id="navegador">
                <h2 id="textoCabecera">SaloneU</h2>
                
            </div>
        </nav>
    </header>

    <form method="post" action="../modelo/entidad/usuario.php">
        <div id="bloqueLogin">
            <div id="titulo">LOGIN ESTUDIANTES</div>
            <div id="login">
                <div id="derecho" id="columnear">
                    <input type="text" name="codEstudiantil" class="inpt" id="usuario" placeholder="Código">
                    <input type="password" name="password" class="inpt" id="contraseña" placeholder="Contraseña">
                </div>
            </div>
            <input type="submit" id="boton" value="ENTRAR">
        </div>
    </form>

    <footer>
        <div id="imagenesFot">
            <div id="izq">
                <img id="" src="img/escudo unimag.png" alt="">
                <img id="" src="img/sello.png" alt="">
                <img id="" src="img/rColombia.png" alt="">
            </div>
            <div id="der">
                <img id="" src="img/icontec.png" alt="">
                <img id="" src="img/fitchrating.png" alt="">
            </div>
        </div>
    </footer>
</body>
</html>