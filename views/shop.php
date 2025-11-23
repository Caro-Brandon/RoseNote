<?php
require_once "app/config/config.php";

$usuarioEmail = $_SESSION['email'] ?? null;
if(!$usuarioEmail){
    header("Location: login.php");
    exit;
}

$res = mysqli_query($conex, "SELECT usuarioID FROM usuario WHERE correo = '$usuarioEmail'");
$usuarioID = mysqli_fetch_assoc($res)['usuarioID'];

if(!isset($_SESSION['carrito'])) $_SESSION['carrito'] = [];

if(isset($_GET['add'])){
    $id_producto = intval($_GET['add']);
    if(!in_array($id_producto, $_SESSION['carrito'])){
        $_SESSION['carrito'][] = $id_producto;
    }
   
}

$sql = "SELECT * FROM producto";
$result = mysqli_query($conex, $sql);

$comprados = [];
$resComprados = mysqli_query($conex, "SELECT producto_id FROM inventario_usuario WHERE usuarioID = $usuarioID");
while($row = mysqli_fetch_assoc($resComprados)){
    $comprados[] = $row['producto_id'];
}
?>

<link rel="stylesheet" href="assets/css/shop.css">
<h1>Tienda</h1>
<div class="galeria">
    <?php while($p = mysqli_fetch_assoc($result)):
        $id = $p['id'];
        $yaEnCarrito = in_array($id, $_SESSION['carrito']);
        $yaObtenido = in_array($id, $comprados);  
    ?>
    <div class="tarjeta">
        <img src="<?= $p['imagen'] ?>" alt="<?= htmlspecialchars($p['nombre']) ?>">
        <h3><?= htmlspecialchars($p['nombre']) ?></h3>
        <p>$<?= $p['precio'] ?></p>
        <div class="contenedorBTN">
            <?php if($yaObtenido): ?>
                <button disabled>Obtenido</button>
            <?php elseif($yaEnCarrito): ?>
                <button disabled>Añadido</button>
            <?php else: ?>
                <button onclick="alert('Producto agregado al carrito'); window.location.href='?add=<?= $id ?>';">
                    Añadir al carrito
                </button>
            <?php endif; ?>
        </div>
    </div>
    <?php endwhile; ?>
</div>
