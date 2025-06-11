<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
  <?php include 'sidebar.php'; ?>
  <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Tabel Transaksi</h1>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pemesan</th>
                <th>No Telp</th>
                <th>Tgl Beli</th>
                <th>Alamat</th>
                <th>Catatan</th>
                <th>Jumlah Beli</th>
                <th>Total Bayar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $data = mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY id_transaksi ASC");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['nama_pemesan']; ?></td>
                  <td><?php echo $d['no_telp']; ?></td>
                  <td><?php echo $d['tgl_beli']; ?></td>
                  <td><?php echo $d['alamat']; ?></td>
                  <td><?php echo $d['catatan']; ?></td>
                  <td><?php echo $d['jumlah_beli']; ?></td>
                  <td><?php echo $d['total_bayar']; ?></td>
                  <td>
                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_transaksi_<?php echo $d['id_transaksi'] ?>">
                      <i class="fa fa-cog"></i>
                    </button>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_transaksi_<?php echo $d['id_transaksi'] ?>">
                      <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>

                <!-- Modal Edit -->
                <div class="modal fade" id="edit_transaksi_<?php echo $d['id_transaksi'] ?>" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form action="update_transaksi.php" method="post">
                        <div class="modal-header">
                          <h5 class="modal-title">Edit Transaksi</h5>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <input type="hidden" name="id" value="<?php echo $d['id_transaksi'] ?>">
                          <div class="form-group">
                            <label>Nama Pemesan</label>
                            <input type="text" name="nama_pemesan" class="form-control" value="<?php echo $d['nama_pemesan'] ?>" required>
                          </div>
                          <div class="form-group">
                            <label>No Telp</label>
                            <input type="text" name="no_telp" class="form-control" value="<?php echo $d['no_telp'] ?>" required>
                          </div>
                          <div class="form-group">
                            <label>Tanggal Beli</label>
                            <input type="date" name="tgl_beli" class="form-control" value="<?php echo $d['tgl_beli'] ?>" required>
                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" required><?php echo $d['alamat'] ?></textarea>
                          </div>
                          <div class="form-group">
                            <label>Catatan</label>
                            <textarea name="catatan" class="form-control"><?php echo $d['catatan'] ?></textarea>
                          </div>
                          <div class="form-group">
                            <label>Jumlah Beli</label>
                            <input type="number" name="jumlah_beli" class="form-control" value="<?php echo $d['jumlah_beli'] ?>" required>
                          </div>
                          <div class="form-group">
                            <label>Total Bayar</label>
                            <input type="number" name="total_bayar" class="form-control" value="<?php echo $d['total_bayar'] ?>" required>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <!-- Modal Hapus -->
                <div class="modal fade" id="hapus_transaksi_<?php echo $d['id_transaksi'] ?>" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus transaksi ini?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <a href="hapus_transaksi.php?id=<?php echo $d['id_transaksi'] ?>" class="btn btn-danger">Hapus</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>