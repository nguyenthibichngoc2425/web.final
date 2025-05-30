<header class="bg-dark text-white">
  <nav class="navbar navbar-expand-lg navbar-dark container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <strong>CeramC</strong>
    </a>

    <!-- Toggler for responsive navbar -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar content -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarAdmin">
      <ul class="navbar-nav">
        <!-- User Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="rounded-circle me-2" width="32" height="32" alt="User">
            <span><?php echo $admin['firstname'].' '.$admin['lastname']; ?></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li class="text-center p-3">
              <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="rounded-circle mb-2" width="64" height="64" alt="User">
              <p class="mb-0"><?php echo $admin['firstname'].' '.$admin['lastname']; ?></p>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item" href="#profile" data-bs-toggle="modal" id="admin_profile">Cập nhật</a>
            </li>
            <li>
              <a class="dropdown-item" href="../logout.php">Đăng xuất</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!-- Modal Profile (bắt buộc phải có modal Bootstrap) -->
<?php include 'includes/profile_modal.php'; ?>
