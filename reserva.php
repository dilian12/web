<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ./admin/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="./img/logo.png" type="image/x-icon">
    <title>Formulario de reserva</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <header class="header">
        <div class="menu container">
            <a href="reserva.php" class="logo">Platillos & Bebidas</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="img/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php#sevicio-section">Servicio</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="index.php#horario-section">Contacto</a></li>
                    <li><a href="index.php#maps-section">Tienda</a></li>
                    <li><a href="./admin/login.php" class="inicio-sesion">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="banner">
        <h2>RESERVA TU MESA</h2>
        <div class="card-contenedor">
            <div class="card-img">
                <div class="one">
                    <i class='bx bx-arrow-back'></i>
                    <label><a href="index.php">Pagina Principal</a></label>
                </div>
            </div>
            <div class="card-contenido">
                <h3>Reserva</h3>
                <form id="reservar-mesa">
                    <div class="form-row">
                        <input type="date" id="fecha" name="fecha">
                        <input type="time" id="hora" name="hora" min="10:00" max="24:00" required>
                    </div>
                    <div class="form-row">
                        <input type="text" placeholder="Nombre completo" id="nombre" name="nombre">
                        <input type="text" placeholder="Telefono" id="telefono" name="telefono">
                    </div>
                    <div class="form-row">
                        <input type="number" placeholder="Personas por mesa" id="personas" name="personas" min="1">
                        <input type="submit" value="RESERVAR MESA">
                    </div>
                </form>
            </div>
        </div>
        <div id="administraReservas">
            <h2 id="administra">Administrar reservas</h2>
            <ul id="reservas" class="lista-citas"></ul>
        </div>
    </section>
    <script src="js/app.js" type="module"></script>
</body>

</html>
