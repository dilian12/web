<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platillos & Bebidas</title>
    <link rel="icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/6dd8d75597.js" crossorigin="anonymous"></script>
</head>

<body>
    <a href="#" class="btn-flotante" id="btnCarrito"><i class="fa-solid fa-cart-shopping"></i></a>
    <header class="header">
        <div class="menu container">
            <a href="index.php" class="logo">Platillos & Bebidas</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="img/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#sevicio-section">Servicio</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="#horario-section">Contacto</a></li>
                    <li><a href="#maps-section">Tienda</a></li>
                    <li><a href="./admin/login.php" class="inicio-sesion">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>El mejor menu</h1>
                <p>
                    (Chef at Home)
                </p>
            </div>
        </div>
    </header>

    <section class="information container">
        <div class="information-content">
            <div class="information-1">
                <div class="information-c1">
                    <h3>Reservaciones</h3>
                    <p>
                        ¡Reserva tu experiencia gastronómica con nosotros! Ya sea que desees una velada romántica,
                        celebrar un evento especial o simplemente disfrutar de una deliciosa comida con amigos, estamos
                        aquí para hacerlo memorable.
                    </p>
                    <a href="reserva.php" class="btn-1">Reservar</a>
                </div>
                <div class="information-a1">
                    <img src="img/reservation.jpg" alt="">
                </div>
            </div>
            <div class="information-2">
                <div class="information-b1">
                    <img src="img/reservation2.jpg" alt="">
                </div>
                <div class="information-c1">
                    <h3>Nosotros</h3>
                    <p>
                        Nos encantaría tenerte como nosotros. En Platillos & Bebidas, nos esforzamos por brindar
                        una experiencia inolvidable.
                    </p>
                    <a href="nosotros.php" class="btn-1">Conoce más</a>
                </div>
            </div>
        </div>
    </section>
    <section id="sevicio-section" class="our">
        <div class="container">
            <h2>Nuestras Especialidades</h2>
        </div>
    </section>

    <section class="oferts">
        <div class="ofert-content container">

            <div class="ofert-1">
                <div class="ofert-txt">
                    <h3>Lorem</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="btn-2">Informacion</a>
                </div>
                <div class="ofert-img">
                    <img src="img/Bebidas.jpg" alt="">
                </div>
            </div>

            <div class="ofert-1">
                <div class="ofert-img">
                    <img src="img/pr2.jpg" alt="">
                </div>
                <div class="ofert-txt">
                    <h3>Lorem</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="btn-2">Informacion</a>
                </div>
            </div>

            <div class="ofert-1">
                <div class="ofert-txt">
                    <h3>Lorem</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="btn-2">Informacion</a>
                </div>
                <div class="ofert-img">
                    <img src="img/Bebidas2.jpg" alt="">
                </div>
            </div>

            <div class="ofert-1">
                <div class="ofert-img">
                    <img src="img/pr3.jpg" alt="">
                </div>
                <div class="ofert-txt">
                    <h3>Lorem</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="btn-2">Informacion</a>
                </div>
            </div>

        </div>
    </section>

    <section class="bg"></section>

    <section id="menu-section" class="food container">

        <h2>Menu</h2>

        <div class="food-content">
            <div class="left">

                <div class="food-1">
                    <h1>Bandeja Paisa</h1>
                    <div class="food-txt">
                        <p>
                            Un plato tradicional colombiano que incluye arroz, frijoles, carne molida, chicharrón, huevo
                            frito, aguacate, plátano maduro y arepa.
                        </p>
                        <p class="precio">
                            $15.000
                        </p>
                    </div>
                </div>

                <div class="food-1">
                    <h1>Ajiaco</h1>
                    <div class="food-txt">
                        <p>
                            Una sopa espesa y reconfortante hecha con pollo, maíz, papa criolla, papa común, guascas y
                            crema de leche.
                        </p>
                        <p class="precio">
                            $10.000
                        </p>
                    </div>
                </div>

                <div class="food-1">
                    <h1>Sancocho</h1>
                    <div class="food-txt">
                        <p>
                            Una sopa colombiana abundante y sustanciosa que combina carne (pollo, res o cerdo), plátano,
                            yuca, papa, mazorca y cilantro.
                        </p>
                        <p class="precio">
                            $12.000
                        </p>
                    </div>
                </div>

                <div class="food-1">
                    <h1>Empanadas</h1>
                    <div class="food-txt">
                        <p>
                            Deliciosas empanadas fritas rellenas de carne molida, papa y especias, servidas con ají
                            picante.
                        </p>
                        <p class="precio">
                            $5.000
                        </p>
                    </div>
                </div>

                <div class="food-1">
                    <h1>Arepa de Choclo con Queso</h1>
                    <div class="food-txt">
                        <p>
                            Una arepa tradicional colombiana hecha con maíz tierno, rellena de queso derretido y
                            cocinada a la parrilla.
                        </p>
                        <p class="precio">
                            $5.000
                        </p>
                    </div>
                </div>

                <div class="food-1">
                    <h1>Lechona</h1>
                    <div class="food-txt">
                        <p>
                            Un plato típico de la región andina de Colombia, consistente en un cerdo entero relleno de
                            arroz, guisantes, cebolla, especias y carne, asado al horno.
                        </p>
                        <p class="precio">
                            $7.500
                        </p>
                    </div>
                </div>

            </div>

            <div class="right">

                <div class="food-1">
                    <h1>Aguardiente Antioqueño</h1>
                    <div class="food-txt">
                        <p>
                            Un licor anisado tradicional colombiano, con un sabor único y una alta graduación
                            alcohólica.
                        </p>
                        <p class="precio">
                            $12.000
                        </p>
                    </div>
                </div>

                <div class="food-1">
                    <h1>Café Colombiano</h1>
                    <div class="food-txt">
                        <p>
                            Café cultivado en las regiones montañosas de Colombia, conocido por su sabor suave y aroma
                            delicioso.
                        </p>
                        <p class="precio">
                            $3.000
                        </p>
                    </div>
                </div>

                <div class="food-1">
                    <h1>Jugo de Lulo</h1>
                    <div class="food-txt">
                        <p>
                            Refrescante jugo tropical hecho con la fruta lulo, conocida por su sabor dulce y ácido.
                        </p>
                        <p class="precio">
                            $3.000
                        </p>
                    </div>
                </div>

                <div class="food-1">
                    <h1>Chicha</h1>
                    <div class="food-txt">
                        <p>
                            Una bebida tradicional colombiana hecha con maíz fermentado, panela y especias, con un sabor
                            ligeramente dulce y picante.
                        </p>
                        <p class="precio">
                            $4.500
                        </p>
                    </div>
                </div>

                <div class="food-1">
                    <h1>Milo</h1>
                    <div class="food-txt">
                        <p>
                            Una bebida caliente a base de malta y cacao, popular en Colombia, especialmente entre los
                            niños.
                        </p>
                        <p class="precio">
                            $2.500
                        </p>
                    </div>
                </div>

                <div class="food-1">
                    <h1>Limonada de Coco</h1>
                    <div class="food-txt">
                        <p>
                            Refrescante bebida hecha con jugo de limón, agua de coco y azúcar, perfecta para calmar la
                            sed en climas cálidos.
                        </p>
                        <p class="precio">
                            $6.500
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a href="menu.php" class="btn-3">COMPRAR</a>
    </section>

    <section id="horario-section" class="horario">
        <div class="horario-info container">
            <h2>Horario</h2>
            <div class="horario-txt">
                <div class="txt">
                    <h4>Direccion</h4>
                    <p>
                        Lorem ipsum dolor
                    </p>
                    <p>
                        Lorem ipsum dolor
                    </p>
                </div>
                <div class="txt">
                    <h4>Horario</h4>
                    <p>
                        Lunes a Viernes: 9:00am - 7:00pm
                    </p>
                    <p>
                        Sabado a Domingo: 11:00am - 4:00pm
                    </p>
                </div>
                <div class="txt">
                    <h4>Telefono</h4>
                    <p>
                        555555555
                    </p>
                    <p>
                        88888888888
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="maps" id="maps-section">
        <h2>Nuestras tiendas</h2>
        <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15905.89492085266!2d-74.10483999085388!3d4.68743017459979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b31ce6d5835%3A0x3b5b6f123d35a1e3!2sUniminuto%20Calle%2080%20Sede%20Principal!5e0!3m2!1ses-419!2sco!4v1715281470295!5m2!1ses-419!2sco!1d4.68743017459979!2d-74.10483999085388!1m18!1m12!1m3!1d3977.097659100313!2d-74.22669062429202!3d4.576477895398134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f75640b9cf807%3A0x719f4ce02057aeff!2sUNIMINUTO%20Centro%20Regional%20Soacha!5e0!3m2!1ses-419!2sco!4v1715281090288!5m2!1ses-419!2sco!1d4.576477895398134!2d-74.22669062429202"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer>
        <div class="footer-content">
            <h3>Platillos & Bebidas</h3>
            <p>El lugar donde los sabores se convierten en experiencias. En nuestro restaurante, estamos comprometidos a
                ofrecerte una experiencia culinaria excepcional que deleitará tus sentidos. Descubre un mundo de sabores
                en nuestro menú variado, desde platos exquisitos hasta bebidas refrescantes.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2024. designed by <span>UNIMINUTO</span></p>
        </div>
    </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>