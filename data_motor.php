<?php
session_start();
?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<?php
require('sidebar.php');
?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Tabel Produk Motor</h1>
  <!-- DataTales Example -->
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
                <td class="text-center"><?php echo $no++; ?></td>
                <td width="100" align="center"><img src="<?php echo "http://localhost/project_psi/" . $d['gambar']; ?>" class="img-rounded" width="100" height="80"></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tipe']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td><?php echo $d['stok']; ?></td>
                <td>
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_motor_<?php echo $d['id_motor'] ?>">
                    <i class="fa fa-cog"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_motor_<?php echo $d['id_motor'] ?>">
                    <i class="fa fa-trash"></i>
                  </button>
                  <form action="update_data_motor.php" method="post">
                    <div class="modal fade" id="edit_motor_<?php echo $d['id_motor'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Edit transaksi</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="form-group" style="width:100%;margin-bottom:20px">
                              <label>Nama</label>
                              <input type="hidden" name="id" value="<?php echo $d['id_motor'] ?>">
                              <input type="text" style="width:100%" name="nama" required="required" class="form-control" value="<?php echo $d['nama'] ?>">
                            </div>
                            <div class="form-group" style="width:100%;margin-bottom:20px">
                              <label>Tipe</label>
                              <input type="text" style="width:100%" name="tipe" required="required" class="form-control" value="<?php echo $d['tipe'] ?>">
                            </div>
                            <div class="form-group" style="width:100%;margin-bottom:20px">
                              <label>Harga</label>
                              <input type="number" style="width:100%" name="harga" required="required" class="form-control" placeholder="Masukkan Nominal .." value="<?php echo $d['harga'] ?>">
                            </div>
                            <div class="form-group" style="width:100%;margin-bottom:20px">
                              <label>Stok</label>
                              <textarea name="stok" style="width:100%" class="form-control" rows="3"><?php echo $d['stok'] ?></textarea>
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
                  <!-- modal hapus -->
                  <div class="modal fade" id="hapus_motor_<?php echo $d['id_motor'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">Peringatan!</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Yakin ingin menghapus data ini ?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <a href="hapus_motor.php?id=<?php echo $d['id_motor'] ?>" class="btn btn-primary">Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
</div>
<!-- End of Main Content -->
<?php require 'footer.php' ?>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
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
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>--