<?php
include 'template/topbar.php';

include '../control/proses_tambah_produk.php';

?>

<body class="bg-gradient-primary">

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
                            <form action="tambah_produk.php" method="POST" class="user" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="namamotor" id="exampleFirstName"
                                            placeholder="Nama Motor">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="tipemotor" id="exampleLastName"
                                            placeholder="Tipe Motor">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" name="hargamotor" id="exampleInputEmail"
                                        placeholder="Harga">
                                </div>
                                <div class="form-group">
                                        <input type="number" class="form-control form-control-user" name="stok" 
                                            id="exampleInputPassword" placeholder="Stok">
                                        
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="detailmotor" 
                                        placeholder="Detail Produk">
                                </div>
                                <input type="file" name="foto_motor">
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
    <script src="../../asset/vendor/jquery/jquery.min.js"></script>
    <script src="../../asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../asset/js/sb-admin-2.min.js"></script>

</body>

</html>