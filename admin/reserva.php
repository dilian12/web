<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <title>Formulario de reserva</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
    <link rel="stylesheet" href="../CSS/despliegue.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/6dd8d75597.js" crossorigin="anonymous"></script>
</head>

<body>
<header class="header">
    <div class="menu container">
        <a href="reserva.php" class="logo">Platillos & Bebidas</a>
        <input type="checkbox" id="menu" />
        <label for="menu">
            <img src="../img/menu.png" class="menu-icono" alt="menu">
        </label>
        <nav class="navbar">
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="inicio.php#sevicio-section">Servicio</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="inicio.php#horario-section">Contacto</a></li>
                <li><a href="inicio.php#maps-section">Tienda</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <span>
                        <img src="../img/usuario.png" alt="Imagen de perfil" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 10px;">
                    </span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style = "background: #DB241B;">
                        <li><a class="dropdown-item" href="#" id="profileLink"><i class="fa-solid fa-user" style="margin-right: 10px;"></i><?php echo $_SESSION['nombre']; ?></a></li>
                        <li><a class="dropdown-item" href="../salir.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Salir</a></li>
                    </ul>
                </li>
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
                    <label><a href="inicio.php">Pagina Principal</a></label>
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
    <script src="../js/app.js" type="module"></script>
</body>

</html>
