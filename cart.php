<?php
require_once "app/config/config.php";

$usuarioEmail = $_SESSION['email'] ?? null;
if(!$usuarioEmail){
    header("Location: login.php");
    exit;
}

if(!isset($_SESSION['carrito'])) $_SESSION['carrito'] = [];

if(isset($_GET['comprar']) && !empty($_SESSION['carrito'])){
    $sql = "SELECT usuarioID FROM usuario WHERE correo = '$usuarioEmail'";
    $res = mysqli_query($conex, $sql);
    $usuario = mysqli_fetch_assoc($res)['usuarioID'];

    foreach($_SESSION['carrito'] as $id_producto){
        $sql_insert = "INSERT INTO inventario_usuario (usuarioID, producto_id) VALUES ($usuario, $id_producto)";
        mysqli_query($conex, $sql_insert);
    }

    $_SESSION['carrito'] = [];

    echo "<script>
            alert('Compra exitosa');
            window.location.href='fondos_disponibles.php';
          </script>";
    exit;
}

if(isset($_GET['remove'])){
    $id_producto = intval($_GET['remove']);
    if(($key = array_search($id_producto, $_SESSION['carrito'])) !== false){
        unset($_SESSION['carrito'][$key]);
        $_SESSION['carrito'] = array_values($_SESSION['carrito']);
    }
    header("Location: cart.php");
    exit;
}

$productos = [];
if(!empty($_SESSION['carrito'])){
    $ids = implode(',', $_SESSION['carrito']);
    $sql = "SELECT * FROM producto WHERE id IN ($ids)";
    $result = mysqli_query($conex, $sql);
    while($p = mysqli_fetch_assoc($result)){
        $productos[] = $p;
    }
}

$total = 0;
foreach($productos as $p){
    $total += $p['precio'];
}

$section = "views/cart";
require_once "layout.php";
?>
