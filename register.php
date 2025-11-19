<?php
include("includes/config.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

if ($pass !== $pass2){
    echo "Las contraseñas no coinciden";
    exit();
}

$passHash = password_hash($pass, PASSWORD_DEFAULT);

$check = mysqli_query($conex, "SELECT * FROM usuario WHERE correo = '$correo'");

if(mysqli_num_rows($check) > 0){
    echo "El correo ya está registrado";
    exit();
}

$query = "INSERT INTO usuario(nombre, correo, contraseña) 
          VALUES ('$nombre', '$correo', '$passHash')";

if(mysqli_query($conex, $query)){

    header("Location: views/login.html");  
    exit();

} 
else{
    echo "Error al registrar";
}
?>
