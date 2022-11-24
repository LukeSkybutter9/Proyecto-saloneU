<?php
   session_start();
    if (!isset($_SESSION['ID_USUARIO'])) {
        header("Location: login.html");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Sierra Nevada</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"></script>
    <script src="https://kit.fontawesome.com/6081769558.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div id="bloqIzq">
            <a href="https://www.unimagdalena.edu.co" class="logo">
                <img src="img/logo.png" alt="logo de la unimag">
                <div class="nombre-empresa">
                    <div>
                        <h2 id="nombreArriba">UNIVERSIDAD DEL</h2>
                    </div>
                    <div>
                        <h2 id="nombreAbajo">MAGDALENA</h2>
                    </div>
                </div>
            </a>
        </div>
        <div id="bloqDer">
            <nav class="opciones">
                <div class="conteBotones">
                    <a href="principal.php" class="fa-solid fa-house"><h3>Inicio</h3></a>
                </div>
                <div class="conteBotones">
                <a href="perfil.php" class="fa-solid fa-circle-user"><h3><?php echo $_SESSION['NOMBRE_USUARIO']?></h3></a>
                </div>
                <div class="conteBotones">
                    <a href="../controlador/accion/act_logout.php"><h3> Cerrar sesión</h3></a>
                </div>
            </nav>
        </div>
    </header>

        <section class="titulo">
            <h1>Sierra Nevada</h1>
            <h2>Escoge un salón la fecha y hora para hacer la reserva de uno de los salones de tu preferencia</h2>
        </section>

        <section class="contenedor">
            <div class="tabla">
                <table id="salonesRegistrados" style="width: 100%">
                    <thead>
                        <tr>
                            <th id="izq">UBICACIÓN</th>
                            <th id="der">DISPONIBILIDAD</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            
            <form method="POST" action="../controlador/accion/ajax_verSalones.php" class="formReserva">
                <div class="apartar">
                    <div class="tituloCod">
                        <div id="flexear">
                            <h1>Código: <?php echo $_SESSION['ID_USUARIO']?></h1>
                        </div>
                    </div>
                        <div id="flexear">
                            <h2>Edificio</h2>
                            <input type="text" name="nombreEdificio" id="nombreEdificio" value="Sierra Nevada">
                        </div>
                        <div id="flexear">
                            <h2>Fecha y hora</h2>
                            <input type="datetime-local" name="fechaHora" id="fHora">
                        </div>
                        <div id="flexear">
                            <h2>Asunto</h2>
                            <textarea name="asunto" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button id="reservar" value="reservar">RESERVAR</button>
                </div>
            </form>
        </section>

        <footer class="pie-pagina">
            <div class="grupo1">
                
                <div class="box">
                    
                    <h2>SOBRE NOSOTROS</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, repellat?</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, repellat?</p>
                </div>
            
                <div class="box">
                    <h2>SIGUENOS</h2>
                    <div class="red-social">
                        <a href="https://www.facebook.com/UniversidadDelMagdalena/" class="fa fa-facebook" target="_blank" ></a>
                        <a href="https://twitter.com/unimagdalena" class="fa fa-instagram" target="_blank"></a>
                        <a href="https://www.instagram.com/unimagdalena/" class="fa fa-twitter" target="_blank"></a>
                        <a href="https://www.youtube.com/user/unimagdalenatv" class="fa fa-youtube" target="_blank"></a> 
                </div>
                
            </div>    
    
            <div class="grupo2">
                <small>&copy;2022 | <b>SALONEU</b> | Todos los derechos Reservados. | Acerca de <a  href="" class="fa-solid fa-circle-info">  </a></small>
            </div>
        </footer>

        <script src="js/librerias/jquery-3.3.1.min.js"></script>
        <script src="js/reservas.js"></script>
</body>
</html>