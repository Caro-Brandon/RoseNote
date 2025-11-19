<?php
include("includes/config.php");

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM usuario WHERE correo = '$usuario' OR nombre = '$usuario'";
$result = mysqli_query($conex, $sql);

if (mysqli_num_rows($result) == 1) {

    $user = mysqli_fetch_assoc($result);

    if (!isset($user['contraseña'])) {
        die("Error: el campo 'contraseña' no existe en la BD. Cambiale el nombre a 'password' en tu tabla.");
    }

    if (password_verify($pass, $user['contraseña'])) {

        $_SESSION['usuarioID'] = $user['usuarioID'];
        $_SESSION['nombre'] = $user['nombre'];

        header("Location: index.php");
        exit();

    } else {
        echo "Contraseña incorrecta";
    }

} else {
    echo "El usuario no existe";
}
?>
