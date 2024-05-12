<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Platillos & Bebidas</title>
  <link rel="icon" href="../img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/nosotros.css">
  <link rel="stylesheet" href="../CSS/despliegue.css">
  <script src="https://kit.fontawesome.com/6dd8d75597.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="nosotros.php" class="logo">Platillos & Bebidas</a>
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
        <section class="box">
            <img src="../img/Candidato1.jpg" width="180" alt="" class="box-img">
            <h1>Dilan Ospina</h1>
            <h2>Software Engineer - Web Developer</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ut hic consequuntur quo qui culpa veritatis, blanditiis corrupti perspiciatis illo a laudantium illum sunt deleniti, nihil doloremque! Obcaecati, at, cupiditate.</p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
            </ul>
          </section>
          <section class="box">
            <img src="../img/Candidato2.jpg" width="180" alt="" class="box-img">
            <h1>Julian Niño</h1>
            <h2>Software Engineer - Web Developer</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ut hic consequuntur quo qui culpa veritatis, blanditiis corrupti perspiciatis illo a laudantium illum sunt deleniti, nihil doloremque! Obcaecati, at, cupiditate.</p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
            </ul>
          </section>
          <section class="box">
            <img src="../img/candidato3.jpg" width="180" alt="" class="box-img">
            <h1>Fabian Pelaez</h1>
            <h2>Software Engineer - Web Developer</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ut hic consequuntur quo qui culpa veritatis, blanditiis corrupti perspiciatis illo a laudantium illum sunt deleniti, nihil doloremque! Obcaecati, at, cupiditate.</p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
            </ul>
          </section>
    </header>
  
</body>
</html>