<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page bg-light">

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card shadow-lg rounded" style="width: 100%; max-width: 420px;">
    <div class="card-body">

      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger text-center'>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success text-center'>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>

      <h4 class="card-title text-center mb-3">Log in to your account</h4>

      <form action="verify.php" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
          </div>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-primary" name="login">
            <i class="fa-solid fa-right-to-bracket"></i> Log In
          </button>
        </div>
      </form>

      <div class="text-center mt-3">
        <a href="password_forgot.php" class="d-block mb-1">Forgot your password?</a>
        <a href="signup.php" class="d-block mb-1">Create a new account</a>
        <a href="index.php"><i class="fa fa-home"></i> Return to homepage</a>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/scripts.php' ?>
</body>
</html>
