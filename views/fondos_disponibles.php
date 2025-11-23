<?php
require_once "app/config/config.php";

$usuario = $_SESSION['email'] ?? null;

if(isset($_GET['seleccionar'])){
    $id_fondo = intval($_GET['seleccionar']);
    $_SESSION['fondoSeleccionado'] = $id_fondo;  
}

$sql = "SELECT p.id, p.nombre, p.imagen
        FROM producto p
        INNER JOIN inventario_usuario iu ON p.id = iu.producto_id
        INNER JOIN usuario u ON iu.usuarioID = u.usuarioID
        WHERE u.correo = '$usuario'";

$result = mysqli_query($conex, $sql);

$fondoSeleccionado = $_SESSION['fondoSeleccionado'] ?? null;
?>

<link rel="stylesheet" href="assets/css/shop.css">

<h1>Mis Fondos Disponibles</h1>
<a href="notas_personales.php" class="regresar">Regresar</a>
<div class="galeria">
    <?php while($f = mysqli_fetch_assoc($result)):
        $id = $f['id'];
        $esSeleccionado = ($id == $fondoSeleccionado);
    ?>
    <div class="tarjeta">
        <img src="<?= $f['imagen'] ?>" alt="<?= htmlspecialchars($f['nombre']) ?>">
        <h3><?= htmlspecialchars($f['nombre']) ?></h3>
        <div class="contenedorBTN">
            <?php if($esSeleccionado): ?>
                <button disabled>Seleccionado</button>
            <?php else: ?>
                <button onclick="window.location.href='?seleccionar=<?= $id ?>'">
                    Seleccionar
                </button>
            <?php endif; ?>
        </div>
    </div>
    <?php endwhile; ?>
</div>
