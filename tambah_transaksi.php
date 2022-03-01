<?php

include 'koneksi.php';

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Admin</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Transaksi!</h1>
                            </div>
                            <form action="proses_tambah_transaksi.php" method="POST" class="user" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="namapemesan">Nama Pemesanan</label>
                                        <input type="text" class="form-control form-control-user" name="nama_pemesan" id="Nama Pemesan">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="NoTelepon">Nomor Telepon</label>
                                        <input type="text" class="form-control form-control-user" name="no_telp" id="NoTelpon">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="TglBeli">Tanggal Beli</label>
                                    <input type="text" class="form-control form-control-user" name="tgl_beli" id="Tanggal Beli">
                                </div>
                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" class="form-control form-control-user" name="alamat" id="Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="catatan">Catatan</label>
                                    <input type="textarea" class="form-control form-control-user" name="catatan" id="catatan">
                                </div>
                                <div class="form-group">
                                    <label for="jumlahbeli">Jumlah Beli</label>
                                    <input type="text" class="form-control form-control-user" name="jumlah_beli" id="Jumlah Beli">
                                </div>
                                <div class="form-group">
                                    <label for="TotalBayar">Total Bayar</label>
                                    <input type="text" class="form-control form-control-user" name="total_bayar" id="TotalBayar">
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Tambah Transaksi">
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="asset/js/sb-admin-2.min.js"></script>

</body>

</html>