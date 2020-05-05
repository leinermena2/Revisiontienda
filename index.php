<?php 
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AVRose Accesorios</title>
  <link href="https://fonts.googleapis.com/css2?family=Gentium+Basic&family=Julius+Sans+One&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="#" id="enlace-inicio" class="btn-header">Inicio</a>
                    <a href="#" id="enlace-equipo" class="btn-header">nosotros</a>
                    <a href="loginvista.html" id="" class="btn-header">Login</a>
                    <a href="http://localhost/carrito/index.php" id="" class="btn-header">tienda</a>
                    <a href="http://localhost/carrito/contact.php" id="enlace-contacto" class="btn-header">Contacto</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9786;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>AVRose Accesorios</h1>
            <h2>Hecho por mujeres para mujeres empoderadas</h2>
        </div>
    </header>
    <main>
        <?php
            include('./php/conexion.php');
            $resultado = $conexion ->query("select * from productos order by id DESC") or die ($conexion -> error);

            
             while($fila =mysqli_fetch_array($resultado)){
                ?>
        <section class="team contenedor" id="equipo">
            <h3>!Lo que tenemos para ti¡</h3>
            <p class="after">Conoce nuestras promociones</p>
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="img/people12.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4><?php echo $fila['id'];?>"><?php echo $fila['nombre']?></h4>
                        <p><?php echo $fila['id'];?>"><?php echo $fila['descripcion']?></p>
                        <p class="text-primary font-weight-bold">$<?php echo $fila['precio']?></p>
                    </div>
                </div>

                <div class="content-card">
                    <div class="people">
                        <img src="img/people2.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4><?php echo $fila['id'];?>"><?php echo $fila['nombre']?><</h4>
                        <p><?php echo $fila['id'];?>"><?php echo $fila['descripcion']?><</p>
                        <p class="text-primary font-weight-bold">$<?php echo $fila['precio']?></p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/people2.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4><?php echo $fila['id'];?>"><?php echo $fila['nombre']?><</h4>
                        <p><?php echo $fila['id'];?>"><?php echo $fila['descripcion']?><</p>
                        <p class="text-primary font-weight-bold">$<?php echo $fila['precio']?></p>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="work contenedor" id="trabajo">
            <h3>Nuestro trabajo</h3>
            <p class="after">Hacemos de algo simple algo extraordinario</p>
            <div class="botones-work">
                <ul>
                    <li class="filter" data-nombre='todos'>Todos</li>
                    <li class="filter" data-nombre='diseño'>Aretes</li>
                    <li class="filter" data-nombre='programacion'>cadenas</li>
                    <li class="filter" data-nombre='marketing'>Manillas</li>
                </ul>
            </div>
            <div class="galeria-work">
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/people2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4><?php include("./layouts/header.php"); ?> </h4>
                    </div>
                </div>
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/people2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Producto</h4>
                    </div>
                </div>
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/people2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Producto</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/people2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Producto</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/people2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Producto</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/people2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Producto</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/people2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Producto</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/people2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Producto</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/people2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Producto</h4>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
    </main>
    <footer id="contacto">
        <div class="footer contenedor">
            <div class="marca-logo">
                <img href="http://localhost/carrito/index.php"src="img/logo.png" alt="">
            </div>
            <div class="iconos">
                
                <i href="https://www.instagram.com/avroseaccesorios/"class="fab fa-facebook-square"></i>
              
            </div>
            <p>La pasión e innovación es lo que nos distingue del resto</p>
        </div>

    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>
</html>