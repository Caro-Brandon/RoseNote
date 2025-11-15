<?php
// include 'verific_usuario.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoseNotes</title>
     <link rel="shortcut icon" href="img/iconos/rosa.png" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous" defer></script>
     
    <!-- navbar css -->
    <link rel="stylesheet" href="css/navbar.css">
     
    <!-- layout css fondo -->
    <link rel="stylesheet" href="css/layout.css">

     <!-- footer css -->
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>
    <header>
        <?php include 'views/navbar.html'; ?> 
    </header>
        
    <main>
        <?php
            $section = (isset($section)) ? $section : 'home';
            require_once $section . '.html';
        ?>
    </main> 

    <footer>
        <?php include 'views/footer.html'; ?>
    </footer>

      

</body>
</html>