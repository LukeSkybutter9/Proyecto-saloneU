<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mar Caribe</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
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
                    <a href="login.php" class="fa-solid fa-circle-user"><h3><?php echo $_SESSION['NOMBRE_USUARIO']?></h3></a>
                </div>
            </nav>
        </div>
    </header>

        <section class="titulo">
            <h1>Mar Caribe</h1>
            <h2>Escoge un salón la fecha y hora para hacer la reserva de uno de los salones de tu preferencia</h2>
        </section>

        <section class="contenedor">
            <div class="tabla">
                <table id="example" class="display" style="width: 100%">
                    <thead>
                        <tr>
                            <th id="izq"># Salón</th>
                            <th>Capacidad</th>
                            <th id="der">Disponibilidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="">MCN-101</a></td>
                            <td>30</td>
                            <td>Disponible</td>
                        </tr>
                        <tr>
                            <td><a href="">MCN-102</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCN-103</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCN-201</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCN-202</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCN-203</a></td>
                            <td>30</td>
                            <td>Disponible</td>
                        </tr>
                        <tr>
                            <td><a href="">MCN-204</a></td>
                            <td>30</td>
                            <td>Disponible</td>
                        </tr>
                        <tr>
                            <td><a href="">MCN-205</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCN-301</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCN-302</a></td>
                            <td>30</td>
                            <td>Disponible</td>
                        </tr>
                        <tr>
                            <td><a href="">MCN-303</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCN-304</a></td>
                            <td>30</td>
                            <td>Disponible</td>
                        </tr>
                        <tr>
                            <td><a href="">MCN-305</a></td>
                            <td>30</td>
                            <td>Disponible</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-101</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-102</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-103</a></td>
                            <td>30</td>
                            <td>Disponible</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-201</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-202</a></td>
                            <td>30</td>
                            <td>Disponible</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-203</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-204</a></td>
                            <td>30</td>
                            <td>Disponible</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-205</a></td>
                            <td>30</td>
                            <td>Disponible</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-301</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-302</a></td>
                            <td>30</td>
                            <td>Disponible</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-303</a></td>
                            <td>30</td>
                            <td>Disponible</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-304</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                        <tr>
                            <td><a href="">MCS-305</a></td>
                            <td>30</td>
                            <td>Ocupado</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="apartar">
                <h1>Código: Admin</h1>
                <form action="" class="formReserva">
                    <div id="flexear">
                        <h2>Fecha y hora</h2>
                        <input type="datetime-local" name="" id="fHora">
                    </div>
                    <div id="flexear">
                        <h2>Asunto  </h2>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button id="reservar" value="reservar">RESERVAR</button>
                </form>
            </div>
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
</body>
</html>