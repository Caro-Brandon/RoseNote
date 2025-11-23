<?php
require_once "app/config/config.php";
header("Content-Type: application/json");

$email = trim($_POST['email'] ?? '');
$contraseña = trim($_POST['contraseña'] ?? '');

if ($email === '' || $contraseña === '') {
    echo json_encode(["success" => false, "message" => "Completa todos los campos."]);
    exit();
}

$stmt = mysqli_prepare($conex, "SELECT correo, contraseña FROM usuario WHERE correo = ? LIMIT 1");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($contraseña, $row['contraseña'])) {
        $_SESSION['email'] = $row['correo'];
        echo json_encode([
            "success" => true,
            "message" => "Inicio de sesión exitoso.",
            "usuario" => $row['correo']  
        ]);
        exit();
    }

    echo json_encode(["success" => false, "message" => "Contraseña incorrecta."]);
    exit();
}

echo json_encode([
    "success" => false,
    "message" => "Correo no registrado."
]);
exit();
 
