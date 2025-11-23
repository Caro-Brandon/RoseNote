<?php
require_once "app/config/config.php"; 
 
$usuarioActual = $_SESSION['email'];

$sql = "SELECT * FROM producto";
$result = mysqli_query($conex, $sql);
?>

<link rel="stylesheet" href="assets/css/index_crud.css">

<span class="titulo">Panel de Administración - Fondos</span>

<section class="crud-panel">

    <a href="add_crud.php" class="btn">Agregar Nuevo Fondo</a>

    <div class="caja-crud">
        <table>

            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Creador</th>
                <th>Acciones</th>
            </tr>

            <?php while($p = mysqli_fetch_assoc($result)): ?>
            <tr>

                <td><?= htmlspecialchars($p['nombre']) ?></td>

               

                <td>$<?= $p['precio'] ?></td>

                <td><?= htmlspecialchars($p['creador']) ?></td>

                <td>
                    <?php if($p['creador'] === $usuarioActual): ?>
                        <a href="edit_crud.php?id=<?= $p['id'] ?>" class="editar-boton">Editar</a> |
                        <a href="delete_crud.php?id=<?= $p['id'] ?>" onclick="return confirm('¿Eliminar este fondo?')" class="eliminar-boton">
                           Eliminar
                        </a>
                    <?php else: ?>
                        <span style="color: gray;">No disponible</span>
                    <?php endif; ?>
                </td>

            </tr>
            <?php endwhile; ?>

        </table>
    </div>

</section>
