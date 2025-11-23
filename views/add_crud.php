<?php
 
$usuarioActual = $_SESSION['email']; 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = trim(mysqli_real_escape_string($conex, $_POST['nombre']));
    $precio = floatval($_POST['precio']);
    $imagen = trim(mysqli_real_escape_string($conex, $_POST['imagen']));

    if (empty($nombre) || $precio <= 0 || empty($imagen)) {
        echo "<script>alert('Por favor completa todos los campos.');</script>";
    } else {

        mysqli_query($conex, "
            INSERT INTO producto (nombre, imagen, precio, creador) 
            VALUES ('$nombre', '$imagen', '$precio', '$usuarioActual')
        ");

        echo "<script>
            alert('Producto agregado correctamente');
            window.location='index_crud.php';
        </script>";
    }
}
?>


<link rel='stylesheet' href='assets/css/add_crud.css'>
 

<section class='editar-panel'>
    <div class='caja-editar'>
        <span class='titulo'>Agregar Producto</span>

        <form method='POST' action=''>

            <div class="campo">
                <label>Nombre del Producto</label>
                <small>Ej: Fondo Nieve</small>
                <input type='text' name='nombre' required>
            </div>

            <div class="campo">
                <label>Precio</label>
                <small>Solo números</small>
                <input type='number' name='precio' step='0.01' required>
            </div>

            <div class="campo">
                <label>Imagen</label>
                <small>URL de la imagen</small>
                <input type='text' name='imagen' required>
            </div>

            <br>
            <button type='submit'>Guardar Producto</button>

        </form>

        <a class='volver' href='index_crud.php'>Regresar</a>
    </div>
</section>
