<link rel="stylesheet" href="assets/css/notas_personales.css">
<script src="assets/js/notas_personales/notas_personales.js" defer> </script>

<section class="general">
    <h1>Mis Notas</h1>
    <div id="notaActual" class="nota" 
         <?php if(isset($_SESSION['fondoSeleccionado'])): 
               $idFondo = $_SESSION['fondoSeleccionado'];
               $res = mysqli_query($conex, "SELECT imagen FROM producto WHERE id = $idFondo");
               $fondo = mysqli_fetch_assoc($res)['imagen'] ?? '';
         ?>
         style="background-image: url('<?= $fondo ?>'); background-size: cover; background-repeat:no-repeat;"
         <?php endif; ?>
          >
        Aquí se verá tu nota.
    </div>
    
    <div class="contenedorBTN">
        <button id="anterior" class="btn">Anterior</button>
        <button id="borrar" class="btn">Borrar</button> 
        <button id="siguiente" class="btn">Siguiente</button>
    </div>

    <div class="contenedorBTN">
        <a href="fondos_disponibles.php" class="btn">Cambiar Fondo</a>
    </div>
</section>
