<?php

include 'koneksi.php';

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Motor</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="p-3 mb-2 bg-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Motor!</h1>
                            </div>
                            <form action="proses_tambah_produk.php" method="POST" class="user" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="namamotor">Nama Motor</label>
                                        <input type="text" class="form-control form-control-user" name="nama" id="namamotor">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="tipemotor">Tipe Motor</label>
                                        <input type="text" class="form-control form-control-user" name="tipe" id="tipemotor">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control form-control-user" name="harga" id="harga">
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="number" class="form-control form-control-user" name="stok" id="stok">
                                </div>
                                <div class="form-group">
                                    <label for="detailproduk">Detail Produk</label>
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="detail">
                                </div>
                                <input type="file" name="gambar">
                                <hr>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Tambah Produk">
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