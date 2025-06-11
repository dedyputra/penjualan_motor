<?php
require 'cek-sesi.php';
require 'cek-admin.php';
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard - Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <?php require('sidebar.php'); ?>

  <!-- Main Content -->
  <div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <h1>Selamat Datang, <?= $_SESSION['nama'] ?></h1>
      <?php require 'user.php'; ?>
    </nav>

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="row">

        <!-- Jumlah Admin -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Admin</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM admin");
                    echo mysqli_num_rows($query);
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Jumlah Produk -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jumlah Produk</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT id_motor FROM motor");
                    echo mysqli_num_rows($query);
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Jumlah Transaksi -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Transaksi</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT id_transaksi FROM transaksi");
                    echo mysqli_num_rows($query);
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div> <!-- END ROW -->

      <!-- Deskripsi Sorum -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Jual Beli Sepeda Motor (Sorum Cahaya Motor)</h6>
        </div>
        <div class="card-body">
          <p>Sorum Cahaya Motor ini adalah tempat jual beli sepeda motor bekas yang berkwalitas menerima pembayaran cash maupun cicilan. Kami menyediakan berbagai jenis motor seperti matic, bebek, dan lainnya.
            Kami juga memberikan pelayanan terbaik untuk kepuasan pelanggan. Silakan kunjungi kami untuk melihat koleksi motor yang tersedia dan mendapatkan penawaran terbaik.</p>
          </p>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->

  <?php require 'footer.php'; ?>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php require 'logout-modal.php'; ?>

  <!-- JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>