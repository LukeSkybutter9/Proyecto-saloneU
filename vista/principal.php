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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="img/escudo unimag.png">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"></script>
    <!--Logos-->
    <!--<i class="fa-regular fa-house"></i>-->
    <!--<i class="fa-regular fa-circle-info"></i>-->
    <!--<i class="fa-regular fa-user"></i>-->
    <script src="https://kit.fontawesome.com/6081769558.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
    $('#example').dataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        } );
    } );
    </script>
    <title>Inicio</title>
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
                <a href="principal.php" class="fa-solid fa-house"><h3>Inicio </h3></a>
                </div>
                <div class="conteBotones">
                <a href="perfil.php" class="fa-solid fa-circle-user"><h3><?php echo $_SESSION['NOMBRE_USUARIO']?></h3></a>
                </div>
                <div class="conteBotones">
                <a href="../controlador/accion/act_logout.php"><h3> Cerrar sesi??n</h3></a>
                </div>
                
            </nav>
        </div>
    </header>


    <div class="supahcontenedor">
        <section class="tituloEdi">
            <h1>Edificios</h1>
            <h2>Escoge un edificio de tu preferencia</h2>
        </section>
    
        <section class="edificios">
            <a href="sierraNevada.php">
                <div class="tarjeta tarjeta__Sierra">
                    <div class="contenido">
                        <h1>Sierra Nevada</h1>
                    </div>
                </div>
            </a>
    
            <a href="cienagaGrande.php">
                <div class="tarjeta tarjeta__Cienaga">
                    <div class="contenido">
                        <h1>Ci??naga Grande</h1>
                    </div>
                </div>
            </a>
    
            <a href="marCaribe.php">
                <div id="fondo" class="tarjeta tarjeta__mCaribe">
                    <div class="contenido">
                        <h1>Mar Caribe</h1>
                    </div>
                </div>
            </a>
        </section>
    </div>

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
</body>
</html>