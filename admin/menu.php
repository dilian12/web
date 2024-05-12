<?php require_once "../config/conexion.php"; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/6dd8d75597.js" crossorigin="anonymous"></script>
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <link href="../assets/css/estilos.css" rel="stylesheet" />
    <link href="../assets/css/nuevo.css" rel="stylesheet" />
    <link href="../assets/css/despliegue.css" rel="stylesheet" />
</head>

<body>
    <a href="#" class="btn-flotante" id="btnCarrito"><i class="fa-solid fa-cart-shopping"></i> <span class="badge bg-success" id="carrito">0</span></a>
    <header class="header">
        <div class="menu container">
            <a href="menu.php" class="logo">Platillos & Bebidas</a>
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
    <!-- Navigation-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <a href="#" class="nav-link text-info" category="all">Todo</a>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?></div>
                                <!-- Product image-->
                                <img class="card-img-top" src="../assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $data['nombre'] ?></h5>
                                        <p><?php echo $data['descripcion']; ?></p>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through"><?php echo $data['precio_normal'] ?></span>
                                        <?php echo $data['precio_rebajado'] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
        </div>
    </section>
    <!-- Footer-->
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
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>