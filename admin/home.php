<?php 
  include 'includes/session.php';
  include 'includes/format.php'; 
  include 'includes/header.php'; 

  $today = date('Y-m-d');
  $year = isset($_GET['year']) ? $_GET['year'] : date('Y');

  $conn = $pdo->open();
?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "<div class='alert alert-danger alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  <h4><i class='icon fa fa-warning'></i> Error!</h4>".$_SESSION['error']."
                </div>";
          unset($_SESSION['error']);
        }

        if(isset($_SESSION['success'])){
          echo "<div class='alert alert-success alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  <h4><i class='icon fa fa-check'></i> Success!</h4>".$_SESSION['success']."
                </div>";
          unset($_SESSION['success']);
        }
      ?>

      <!-- THỐNG KÊ NHANH -->
      <div class="row">
        <!-- Tổng doanh thu -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php
                $stmt = $conn->prepare("SELECT * FROM details LEFT JOIN products ON products.id=details.product_id");
                $stmt->execute();
                $total = 0;
                foreach($stmt as $row){
                  $total += $row['price'] * $row['quantity'];
                }
                echo "<h3>$ ".number_format_short($total, 2)."</h3>";
              ?>
              <p>Total Sales</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
          </div>
        </div>

        <!-- Sản phẩm -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <?php
                $stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM products");
                $stmt->execute();
                $row = $stmt->fetch();
                echo "<h3>".$row['numrows']."</h3>";
              ?>
              <p>Number of Products</p>
            </div>
            <div class="icon">
              <i class="fa fa-barcode"></i>
            </div>
          </div>
        </div>

        <!-- Người dùng -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
                $stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users");
                $stmt->execute();
                $row = $stmt->fetch();
                echo "<h3>".$row['numrows']."</h3>";
              ?>
              <p>Number of Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>

        <!-- Doanh thu hôm nay -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <?php
                $stmt = $conn->prepare("SELECT * FROM details 
                                        LEFT JOIN sales ON sales.id=details.sales_id 
                                        LEFT JOIN products ON products.id=details.product_id 
                                        WHERE sales_date=:sales_date");
                $stmt->execute(['sales_date' => $today]);
                $total = 0;
                foreach($stmt as $row){
                  $total += $row['price'] * $row['quantity'];
                }
                echo "<h3>$ ".number_format_short($total, 2)."</h3>";
              ?>
              <p>Sales Today</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- END THỐNG KÊ -->
    </section>
  </div>

  <?php include 'includes/footer.php'; ?>
</div>

<?php 
  $pdo->close(); 
  include 'includes/scripts.php'; 
?>

<!-- Optional Chart Section (Nếu muốn vẽ biểu đồ) -->
<script>
$(function(){
  $('#select_year').change(function(){
    window.location.href = 'home.php?year=' + $(this).val();
  });

  <?php if(isset($months) && isset($sales)): ?>
  var ctx = document.getElementById('barChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($months); ?>,
      datasets: [{
        label: 'Sales',
        backgroundColor: 'rgba(226, 150, 150, 0.9)',
        borderColor: 'rgba(226, 150, 150, 1)',
        borderWidth: 1,
        data: <?php echo json_encode($sales); ?>
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  <?php endif; ?>
});
</script>
</body>
</html>
