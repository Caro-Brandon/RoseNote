<?php
require_once "app/config/config.php";
header('Content-Type: application/json');  

$response = ["success" => false, "message" => "Error desconocido"];

if(isset($_POST['nombre'], $_POST['email'], $_POST['contraseña'], $_POST['confirmarContraseña'])) {
    $name = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $contraseña = trim($_POST['contraseña']);
    $confirmarContraseña = trim($_POST['confirmarContraseña']);

    if ($name === '' || $email === '' || $contraseña === '' || $confirmarContraseña === '') {
        $response["message"] = "Por favor completa todos los campos.";
        echo json_encode($response);
        exit;
    }

    if ($contraseña !== $confirmarContraseña) {
        $response["message"] = "Las contraseñas no coinciden.";
        echo json_encode($response);
        exit;
    }

    

    $checkEmail = "SELECT * FROM usuario WHERE correo ='$email'";

    $resEmail = mysqli_query($conex, $checkEmail);

    $checkUser = "SELECT * FROM usuario WHERE nombre ='$name'";

    $resUser = mysqli_query($conex, $checkUser);

    if (mysqli_num_rows($resEmail) > 0) {
        $response["message"] = "El correo $email ya está en uso.";
    } else if (mysqli_num_rows($resUser) > 0) {
        $response["message"] = "El usuario $name ya está en uso.";
    } else {
        $contraseñaHash = password_hash($contraseña, PASSWORD_DEFAULT);

        $consulta = "INSERT INTO usuario(nombre, correo, contraseña)
                     VALUES ('$name', '$email', '$contraseñaHash')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            $response = ["success" => true, "message" => "Usuario registrado correctamente."];
        } else {
            $response["message"] = "Error al registrar usuario.";
        }
    }
} else {
    $response["message"] = "Faltan datos del formulario.";
}

echo json_encode($response);
 