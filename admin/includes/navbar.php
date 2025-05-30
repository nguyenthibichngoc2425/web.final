<header class="bg-dark text-white">
  <nav class="navbar navbar-expand-lg navbar-dark container-fluid">
    <!-- Logo -->
    <a class="navbar-brand fw-bold" href="#">
      CeramC
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Content -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarAdmin">
      <ul class="navbar-nav">
        <!-- User Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="rounded-circle me-2" width="32" height="32" alt="User">
            <span><?php echo $admin['firstname'].' '.$admin['lastname']; ?></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="userDropdown">
            <li class="p-3">
              <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="rounded-circle mb-2" width="64" height="64" alt="User">
              <div><?php echo $admin['firstname'].' '.$admin['lastname']; ?></div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#profile" data-bs-toggle="modal" id="admin_profile"><i class="fa-solid fa-user-pen me-2"></i>Cập nhật</a></li>
            <li><a class="dropdown-item" href="../logout.php"><i class="fa-solid fa-right-from-bracket me-2"></i>Đăng xuất</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!-- Modal cập nhật thông tin Admin -->
<?php include 'includes/profile_modal.php'; ?>
