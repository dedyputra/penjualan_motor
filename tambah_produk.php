<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Motor</title>

    <!-- Custom fonts and styles -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .custom-card {
            max-width: 650px;
            /* Batasi lebar form */
            margin: 50px auto;
            /* Pusatkan form di tengah */
        }
    </style>
</head>

<body class="p-3 mb-2 bg-primary">

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg custom-card">
            <div class="card-body p-0">
                <div class="p-5">
                    <div class="text-center mb-4">
                        <h1 class="h4 text-gray-900">Tambah Motor</h1>
                    </div>
                    <form action="proses_tambah_produk.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="namamotor">Nama Motor</label>
                                <input type="text" class="form-control" name="nama" id="namamotor" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="tipemotor">Tipe Motor</label>
                                <input type="text" class="form-control" name="tipe" id="tipemotor" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" name="harga" id="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" name="stok" id="stok" required>
                        </div>
                        <div class="form-group">
                            <label for="detailproduk">Detail Produk</label>
                            <input type="text" class="form-control" name="detail" id="detailproduk" required>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control-file" name="gambar" id="gambar" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Tambah Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>