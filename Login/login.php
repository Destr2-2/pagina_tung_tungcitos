
<?php
/*
session_start();

$db_host = 'localhost';
$db_user = 'root';
$db_base = 'tungtung';
$db_port = '3306';

$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database, $db_port);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contra = $_POST["contra"];

    $usuario = $conexion->real_escape_string($usuario);
    $contra = $conexion->real_escape_string($contra);

    // CORRECCIÓN: La tabla tiene 'usuario' no 'user' como campo
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contra = '$contra'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $_SESSION["usuario"] = $usuario;
        header("Location: docentes.php");
        exit;
    } else {
        $mensaje = "Usuario o contraseña incorrectos";
    }
}

$conexion->close();
*/
?>
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="login">
    <h2 class="text-danger mb-4">Iniciar sesión</h2>

    <form method="POST" action="" class="formulario">
        <input type="text" name="usuario" placeholder="Usuario" required class="user">
        <input type="password" name="password" placeholder="Contraseña" required class="pass">
        <button type="submit" class="btn btn-danger">Ingresar</button>
    </form>

    <?php if ($mensaje != ""): ?>
        <p id="mensaje-error"><?= $mensaje ?></p>
    <?php endif; ?>
</div>

</body>
</html>