<?php 

require_once "app/config/config.php";  


if (!isset($_GET['id'])) {
    echo "<script>alert('ID no válido'); window.location='index_crud.php';</script>";
    exit();
}

$id = intval($_GET['id']);
$usuarioActual = $_SESSION['email'];

$query = mysqli_query($conex, "SELECT * FROM producto WHERE id = $id");
$producto = mysqli_fetch_assoc($query);

if (!$producto) {
    echo "<script>alert('Producto no encontrado'); window.location='index_crud.php';</script>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = trim(mysqli_real_escape_string($conex, $_POST['nombre']));
    $precio = floatval($_POST['precio']);
    $imagen = trim(mysqli_real_escape_string($conex, $_POST['imagen']));

    if (empty($nombre) || $precio <= 0 || empty($imagen)) {
        echo "<script>alert('Completa todos los campos');</script>";
    } else {
        mysqli_query($conex, "
            UPDATE producto 
            SET nombre='$nombre', precio='$precio', imagen='$imagen'
            WHERE id=$id
        ");

        echo "<script>
            alert('Producto actualizado correctamente');
            window.location='index_crud.php';
        </script>";
    }
}

$section = "views/edit_crud";
require_once "layout.php";
?>
 