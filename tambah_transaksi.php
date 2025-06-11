<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tambah Transaksi</title>

    <!-- Font & Style -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 mx-auto" style="max-width: 800px;">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <h1 class="h4 text-gray-900">Tambah Transaksi</h1>
                </div>
                <form action="proses_tambah_transaksi.php" method="POST" class="user" enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nama_pemesan">Nama Pemesan</label>
                            <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="no_telp">Nomor Telepon</label>
                            <input type="text" class="form-control" name="no_telp" id="no_telp" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl_beli">Tanggal Beli</label>
                        <input type="date" class="form-control" name="tgl_beli" id="tgl_beli" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="catatan">Catatan</label>
                        <textarea class="form-control" name="catatan" id="catatan" rows="3"></textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="jumlah_beli">Jumlah Beli</label>
                            <input type="number" class="form-control" name="jumlah_beli" id="jumlah_beli" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="total_bayar">Total Bayar</label>
                            <input type="number" class="form-control" name="total_bayar" id="total_bayar" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Tambah Transaksi</button>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>