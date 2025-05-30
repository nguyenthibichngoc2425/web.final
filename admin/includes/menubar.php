<aside class="bg-dark text-white vh-100 p-3" style="width: 250px;">
  <!-- Sidebar user panel -->
  <div class="d-flex align-items-center mb-4">
    <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="rounded-circle me-2" alt="User Image" width="40" height="40">
    <div>
      <p class="mb-0"><?php echo $admin['firstname'].' '.$admin['lastname']; ?></p>
      <small><i class="fa-solid fa-circle text-success"></i> Online</small>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <h6 class="text-uppercase fw-bold text-muted">Reports</h6>
  <ul class="nav flex-column mb-3">
    <li class="nav-item">
      <a href="home.php" class="nav-link text-white">
        <i class="fa-solid fa-gauge me-2"></i> Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a href="sales.php" class="nav-link text-white">
        <i class="fa-solid fa-money-bill-wave me-2"></i> Sales
      </a>
    </li>
  </ul>

  <h6 class="text-uppercase fw-bold text-muted">Manage</h6>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a href="users.php" class="nav-link text-white">
        <i class="fa-solid fa-users me-2"></i> Users
      </a>
    </li>

    <!-- Dropdown for Products -->
    <li class="nav-item">
      <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#productMenu" role="button" aria-expanded="false" aria-controls="productMenu">
        <span><i class="fa-solid fa-barcode me-2"></i> Products</span>
        <i class="fa-solid fa-angle-down"></i>
      </a>
      <div class="collapse" id="productMenu">
        <ul class="nav flex-column ms-3 mt-2">
          <li class="nav-item">
            <a href="products.php" class="nav-link text-white">
              <i class="fa-solid fa-box-open me-2"></i> Product List
            </a>
          </li>
          <li class="nav-item">
            <a href="category.php" class="nav-link text-white">
              <i class="fa-solid fa-layer-group me-2"></i> Category
            </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</aside>
