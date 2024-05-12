<?php
session_start();

$alert = '';

if (!empty($_SESSION['active'])) {
    header('location: inicio.php');
    exit;
} elseif (!empty($_POST)) {
    require_once "../config/conexion.php";

    if (isset($_POST['login'])) {
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                            Ingrese usuario y contraseña
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
        } else {
            $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $clave = mysqli_real_escape_string($conexion, $_POST['clave']);
            $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$user'");
            $resultado = mysqli_fetch_assoc($query);
            if ($resultado && password_verify($clave, $resultado['clave'])) {
                $_SESSION['active'] = true;
                $_SESSION['id'] = $resultado['id'];
                $_SESSION['nombre'] = $resultado['nombre'];
                $_SESSION['user'] = $resultado['usuario'];
                header('Location: inicio.php');
                exit;
            } else {
                $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                            Usuario o Contraseña incorrecta
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session_destroy();
            }
        }
    } elseif (isset($_POST['registro'])) {
        $nombres = mysqli_real_escape_string($conexion, $_POST['nombres']);
        $email = mysqli_real_escape_string($conexion, $_POST['email']);
        $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
        
        $insert_query = "INSERT INTO usuarios (nombre, usuario, clave) VALUES ('$nombres', '$email', '$contraseña')";
        
        if (mysqli_query($conexion, $insert_query)) {
            $alert = '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                        Registro exitoso
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        } else {
            $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                        Error al registrar usuario
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../assets/css/sb-admin-2.min.css">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <title>Login & Registration</title>
</head>
<body>
<div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>Platillos & Bebidas</p>
        </div>
        <div class="nav-button">
            <a class="btn white-btn" href="index.php">Administrador</a>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>


    <div class="form-box">
        <div class="login-container" id="login">
            <div class="top">
                <span>¿No tienes una cuenta?<a href="#" onclick="register()">Registarse</a></span>
                <header>Login</header>
            </div>
            <?php if(isset($alert)) echo $alert; ?>
            <form method="POST" action="">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Usuario o Email" id="usuario" name="usuario">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Contraseña" id="clave" name="clave">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <button type="submit" class="submit" name="login">Iniciar Sesión</button>
                </div>
            </form>
            <div class="two-col">
                <div class="one">
                    <i class='bx bx-arrow-back'></i>
                    <label><a href="../index.php">Pagina Principal</a></label>
                </div>
                <div class="two">
                    <label><a href="#">Olvidó la contraseña?</a></label>
                </div>
            </div>
        </div>

        <div class="register-container" id="register" style="right: -520px;">
            <div class="top">
                <span>¿Tienes una cuenta?<a href="#" onclick="login()">Login</a></span>
                <header>Registarse</header>
            </div>
            <?php if(isset($alert)) echo $alert; ?>
            <form method="POST" action="">
                <div class="input-box">
                    <input type="text" name="nombres" class="input-field" placeholder="Nombre y Apellido">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" name="email" class="input-field" placeholder="Email">
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="contraseña" class="input-field" placeholder="Contraseña">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <button type="submit" class="submit" name="registro">Registarme</button>
                </div>
            </form>
            <div class="two-col">
                <div class="one">
                    <i class='bx bx-arrow-back'></i>
                    <label><a href="#" onclick="login()">Regresar</a></label>
                </div>
                <div class="two">
                    <label><a href="#">Términos & condiciones</a></label>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function myMenuFunction() {
        var i = document.getElementById("navMenu");
        if(i.className === "nav-menu") {
            i.className += " responsive";
        } else {
            i.className = "nav-menu";
        }
    }

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }
</script>

<!-- Bootstrap core JavaScript-->
<script src="../assets/js/jquery-3.6.0.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../assets/js/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../assets/js/sb-admin-2.min.js"></script>

</body>
</html>
