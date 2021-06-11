<?php include('../cdn.php'); ?>
<!-- nav start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <?php
      session_start();
      if(isset($_SESSION['id'])){
      $sql=mysqli_query($conn,"SELECT * FROM adminuser WHERE id='".$_SESSION['id']."'");
      $adminuser=mysqli_fetch_assoc($sql); 
      ?>
    <a class="navbar-brand"  data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" ><?php echo $adminuser['name']; ?> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">     
            <li><a class="dropdown-item" href="index.php">Login</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Action</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex my-auto">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search fa-1x"></i></button>
      </form>
    </div>
  </div>
</nav>
<!-- nav end -->

<!-- offcanvas start -->
<div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="photo">
      <img class="user-photo bg-light img-fluid mx-auto d-block mt-5" src="../img/<?php echo $adminuser['photo']; ?> ">
    </div>
    <div class="offcanvas-title user-name text-dark" id="offcanvasExampleLabel"><?php echo $adminuser['name']; } ?>
    </div>
  <div class="offcanvas-body">
    <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#getting-started-collapse" aria-expanded="false"><i class="fas fa-users mx-2"></i>Customer<i class="fas fa-chevron-circle-down mx-2"></i>
    </button>
    <div class="collapse" id="getting-started-collapse">
      <ul class="list-unstyled fw-normal pb-1 small">
        <li><a class="dropdown-item" href="#"><i class="fas fa-user-plus mx-2"></i>Register</a></li>
        <li><a class="dropdown-item" href="#"><i class="fas fa-shopping-cart mx-2"></i>Order</a></li>
        <li><a class="dropdown-item" href="#"><i class="fas fa-comments mx-2"></i>Feeback</a></li>
      </ul>
    </div>
  </div> 
</div>
<!-- offcanvas end -->
