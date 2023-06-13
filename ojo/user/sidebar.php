<?php 
  $dataUser = dataUser();
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="../assets/img/img_properties/logo.png" alt="Logo" class="brand-image rounded elevation-3 p-1 bg-white">
    <span class="brand-text font-weight-light">Profile User</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img style="width: 45px; height: 45px" src="../assets/img/img_profiles/<?= $dataUser['photo_profile']; ?>" class="img-circle elevation-2 img-profile" alt="User Image">
      </div>
      <div class="info">
        <a href="profile.php" class="d-block"><?= $dataUser['username']; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-item">
              <a href="komentar.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Komentar</p>
              </a>
            </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>