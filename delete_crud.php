<?php
require_once "app/config/config.php";  

if (!isset($_GET['id'])) {
    die("ID del producto no especificado.");
}

$idProducto = intval($_GET['id']);

$check = mysqli_query($conex, "SELECT * FROM producto WHERE id = $idProducto");
if (mysqli_num_rows($check) == 0) {
    die("Producto no encontrado.");
}

if (mysqli_query($conex, "DELETE FROM producto WHERE id = $idProducto")) {
    echo"
    <script>
     alert('Producto eliminado correctamente'); 
     window.location='index_crud.php';
    </script>";
    
} else {
    echo "Error al eliminar el producto: " . mysqli_error($conex);
}
?>
