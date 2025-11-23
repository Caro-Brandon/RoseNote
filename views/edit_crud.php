<link rel="stylesheet" href="assets/css/add_crud.css">

<section class="editar-panel">
    <div class="caja-editar">
        <span class="titulo">Editar Producto</span>

        <form method="POST" action="">
            
            <div class="campo">
                <label>Nombre del Producto</label>
                <small>Ej: Fondo Nieve</small>
                <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>" required>
            </div>

            <div class="campo">
                <label>Precio</label>
                <small>Solo números</small>
                <input type="number" name="precio" step="0.01" value="<?php echo $producto['precio']; ?>" required>
            </div>

            <div class="campo">
                <label>Imagen</label>
                <small>URL de la imagen</small>
                <input type="text" name="imagen" value="<?php echo $producto['imagen']; ?>" required>
            </div>

            <br>
            <button type="submit">Guardar Cambios</button>
        </form>

        <a class="volver" href="index_crud.php">Regresar</a>
    </div>
</section>
