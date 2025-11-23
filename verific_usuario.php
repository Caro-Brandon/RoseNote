<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['email'])) {
    echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='views/LoginIncognito.php';  
          </script>";
    exit();
}

header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
?>
