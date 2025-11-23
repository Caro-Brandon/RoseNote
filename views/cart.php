<link rel="stylesheet" href="assets/css/cart.css">
<div class="carrito-contenedor">
    <h1>Carrito de Compras</h1>

    <div class="carrito-productos">
        <?php if(empty($productos)): ?>
            <p style="text-align:center; font-weight:bold;">Tu carrito está vacío.</p>
        <?php else: ?>
            <?php foreach($productos as $p): ?>
                <div class="tarjeta">
                    <img src="<?= $p['imagen'] ?>" alt="<?= htmlspecialchars($p['nombre']) ?>">
                    <div class="info">
                        <h3><?= htmlspecialchars($p['nombre']) ?></h3>
                        <p>$<?= $p['precio'] ?></p>
                    </div>
                    <div class="contenedorBTN">
                        <button>
                            <a href="?remove=<?= $p['id'] ?>" style="color:white; text-decoration:none; display:block;">Eliminar</a>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <?php if(!empty($productos)): ?>
        <div class="carrito-total"> 
        <h2>Total: $<?= $total ?></h2>
            <button>
                <a href="cart.php?comprar=1" style="color:white; text-decoration:none;">Finalizar Compra</a>
            </button>
        </div>
    <?php endif; ?>
</div>