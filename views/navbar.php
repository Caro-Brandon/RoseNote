<nav class="navbar navbar-expand-lg">
  <div class="container-fluid d-flex justify-content-between align-items-center">

    <div class="d-flex align-items-center">

      <a href="index.php" class="navbar-brand me-3">
        <img src="assets/img/iconos/rosa.png" width="50" height="50">
      </a>

      <div class="collapse navbar-collapse" id="menuNavbar">
        <ul class="navbar-nav gap-3">
          <li class="nav-item "><a class="nav-link active" href="shop.php">Tienda</a></li>
          <li class="nav-item "><a class="nav-link active" href="index_crud.php">Crud</a></li>
          <li class="nav-item "><a class="nav-link active" href="about_us.php">Sobre nosotros</a></li>
          <li class="nav-item "><a class="nav-link active" href="blog.php">Blog</a></li>
          <li class="nav-item "><a class="nav-link active" href="contact.php">Contacto</a></li>
          <li class="nav-item "><a class="nav-link active" href="logout.php">Cerrar sesión</a></li>
        </ul>
      </div>

    </div>

    <div class="d-flex align-items-center ">

      <span class="me-5 d-none d-lg-block">
        <?php echo 'hola' . ' ' . $_SESSION['email']; ?>
      </span>

      <a class="nav-link d-none d-lg-block me-4" href="cart.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
          <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1"/>
        </svg>
      </a>

      <button class="navbar-toggler ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuDerecha">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>

  </div>
</nav>

<div class="offcanvas offcanvas-end navFondo" tabindex="-1" id="menuDerecha">

  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menú</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>

  <div class="offcanvas-body">

    <ul class="navbar-nav">
      <li class="nav-item "><a class="nav-link active" href="shop.php">Tienda</a></li>
      <li class="nav-item "><a class="nav-link active" href="index_crud.php">Crud</a></li>
      <li class="nav-item"><a class="nav-link" href="about_us.php">Sobre nosotros</a></li>
      <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.php">Contacto</a></li>
      <li class="nav-item"><a class="nav-link" href="logout.php">Cerrar sesión</a></li>
    </ul>

    <hr>

    <p class="mt-3 d-lg-none">
      <?php echo $_SESSION['email']; ?>
    </p>

     <a class="nav-link d-lg-none" href="cart.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
        <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1m3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1m4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1"/>
      </svg>
    </a>

  </div>
</div>
