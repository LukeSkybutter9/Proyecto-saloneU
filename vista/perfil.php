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
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="img/escudo unimag.png">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"></script>
    <script src="https://kit.fontawesome.com/6081769558.js" crossorigin="anonymous"></script>
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
                    <a href="../controlador/accion/act_logout.php"><h3> Cerrar Sesión</h3></a>
                </div>
                
            </nav>
        </div>
    </header>
    

    <div class="container">
        <section class="modal">
                <div class="modal__container">
                    <div class="xCerrar">
                        <a href="" class="modal__close">X</a>
                    </div>
                    <h2 class="modal__title">MODIFICAR PERFIL</h2>
                    <form method="POST" action="../controlador/accion/act_modificarPerfil.php">
                        <div class="contenedorForm">
                        <div class="izq">
                        <label for="">Codigo estudiantil</label>
                        <label for="">Nombre</label>
                        <label for="">Correo</label>
                        <label for="">Contraseña</label>
                        <label for="">Telefono</label>
                        <label for="">Fecha Nacimiento</label>
                        <label for="">Sexo</label>
                        <label for="">Es Admin</label>
                        </div>
                        <div class="der">
                        <input type="text" name="codEdst" id="codEdst" value="<?php echo $_SESSION['ID_USUARIO']?>" readonly>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $_SESSION['NOMBRE_USUARIO']?>" readonly>
                        <input type="text" name="correo" id="correo" value="<?php echo $_SESSION['CORREO_USUARIO']?>" readonly>
                        <input type="password" name="password" id="password" value="<?php echo $_SESSION['PASSWORD_USUARIO']?>">
                        <input type="number" name="telefono" id="telefono" value="<?php echo $_SESSION['TELEFONO_USUARIO']?>">
                        <input type="text" name="fechaNac" id="fechaNac" value="<?php echo $_SESSION['FECHANAC_USUARIO']?>" readonly>
                        <input type="text" name="sexo" id="sexo" value="<?php echo $_SESSION['SEXO_USUARIO']?>" readonly>
                        <input type="text" name="admin" id="admin" value="<?php echo $_SESSION['ES_ADMIN']?>" readonly>
                        </div>
                        </div>
                        <div class="botonModificar">
                            <button id="modificar" type="submit" value="Modificar">Modificar</button>
                        </div>
                    </form>
                    
                </div>
        </section>

        <h1>Datos personales</h1>
        <div class="contieneModi">
        <a href="#" class="abrirModal" >Modificar</a>
        </div>
        <section class="tablaUsuario">
                <table class="table" id="usuariosRegistrados">
                    <thead>
                        <tr>
                        <th scope="col">Codigo Estudiantil</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Sexo</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th id="idUsuario"><?php echo $_SESSION['ID_USUARIO']?></th>
                        <th><?php echo $_SESSION['NOMBRE_USUARIO']?></th>
                        <th><?php echo $_SESSION['CORREO_USUARIO']?></th>
                        <th><?php echo $_SESSION['TELEFONO_USUARIO']?></th>
                        <th><?php echo $_SESSION['FECHANAC_USUARIO']?></th>
                        <th><?php echo $_SESSION['SEXO_USUARIO']?></th>
                        </tr>
                    </tbody>
                </table>
        </section>
        

        <h1 id="hisRe">Historial de reservas de <?php echo $_SESSION['NOMBRE_USUARIO']?> </h1>
        <div class="contieneInput">
            <h3>RESERVA-</h3>
            <form method="POST" action="../controlador/accion/act_eliminarReserva.php">
                <input name="idReserva" class="radioReserva" type="text">
                <button type="submit" id="eliminar" value="ELIMINAR">Eliminar</button>
            </form>
        </div>
        <section class="historialReserva">
                <table class="table" id="reservasRegistradas">
                    <thead>
                        <tr>
                        <th scope="col">Opción</th>    
                        <th scope="col">Salón</th>    
                        <th scope="col">Código de reserva</th>
                        <th scope="col">Fecha de registro</th>
                        <th scope="col">Asunto</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
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
    <script src="js/librerias/jquery-3.3.1.min.js"></script>
    <script src="js/historialReservas.js"></script>
    <script src="js/modal.js"></script>
</body>
</html>