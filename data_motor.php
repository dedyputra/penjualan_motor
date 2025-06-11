<?php
session_start();
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>

  <!-- Fonts & Styles -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<?php require('sidebar.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Data Tabel Produk Motor</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Motor</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Nama</th>
              <th>Tipe</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Detail Produk</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'koneksi.php';
            include 'oop.php';

            $oop = new oop();
            $data = $oop->get_motor($koneksi);

            $no = 1;
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td align="center">
                  <img src="<?= "http://localhost/project_psi/" . $d['gambar'] ?>" class="img-fluid rounded" width="100" height="80">
                </td>
                <td><?= htmlspecialchars($d['nama']) ?></td>
                <td><?= htmlspecialchars($d['tipe']) ?></td>
                <td><?= number_format($d['harga'], 0, ',', '.') ?></td>
                <td><?= $d['stok'] ?></td>
                <td><?= htmlspecialchars($d['detail']) ?></td>
                <td>
                  <!-- Tombol Edit -->
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_motor_<?= $d['id_motor'] ?>">
                    <i class="fa fa-cog"></i>
                  </button>

                  <!-- Tombol Hapus -->
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_motor_<?= $d['id_motor'] ?>">
                    <i class="fa fa-trash"></i>
                  </button>

                  <!-- Modal Edit -->
                  <form action="update_data_motor.php" method="post">
                    <input type="hidden" name="id_motor" value="<?= $d['id_motor'] ?>">
                    <div class="modal fade" id="edit_motor_<?= $d['id_motor'] ?>" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Edit Data Motor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <input type="hidden" name="id" value="<?= $d['id_motor'] ?>">
                            <div class="form-group">
                              <label>Nama</label>
                              <input type="text" name="nama" class="form-control" required value="<?= htmlspecialchars($d['nama']) ?>">
                            </div>
                            <div class="form-group">
                              <label>Tipe</label>
                              <input type="text" name="tipe" class="form-control" required value="<?= htmlspecialchars($d['tipe']) ?>">
                            </div>
                            <div class="form-group">
                              <label>Harga</label>
                              <input type="number" name="harga" class="form-control" required value="<?= $d['harga'] ?>">
                            </div>
                            <div class="form-group">
                              <label>Stok</label>
                              <input type="number" name="stok" class="form-control" required value="<?= $d['stok'] ?>">
                            </div>
                            <div class="form-group">
                              <label>Detail Produk</label>
                              <input type="text" name="detail" class="form-control" required value="<?= htmlspecialchars($d['detail']) ?>">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>

                  <!-- Modal Hapus -->
                  <div class="modal fade" id="hapus_motor_<?= $d['id_motor'] ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Peringatan!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Yakin ingin menghapus data ini?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <a href="hapus_motor.php?id=<?= $d['id_motor'] ?>" class="btn btn-danger">Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php require 'footer.php'; ?>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin Keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Silahkan Jika Ingin Keluar</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="../control/logout.php">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- JS Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>
</body>

</html>