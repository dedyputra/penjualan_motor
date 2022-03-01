<?php
include 'template/topbar.php';

include '../control/koneksi.php';

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
                                            <th>#</th>
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
                                        $nomor = 1;
                                        $getmotor = mysqli_query($conn, "SELECT * FROM motor");
                                        while ($tampil = mysqli_fetch_array($getmotor)) {
                                            // code...
                                            $nama = $tampil['nama_motor'];
                                            $gambar = $tampil['gambar'];
                                            $tipe = $tampil['tipe'];
                                            $harga = $tampil['harga'];
                                            $stok = $tampil['stok'];
                                            ?>
                                        <tr>
                                        <td><?php echo $nomor ?></td>
                                        <td><?php echo $gambar ?></td>
                                        <td><?php echo $nama ?></td>
                                        <td><?php echo $tipe ?></td>
                                        <td><?php echo $harga ?></td>
                                        <td><?php echo $stok ?></td>
                                        <td><a href='php/delete_siswa.php?Del=<?php echo $id_siswa ?>'><input type='submit' value='Edit' id='editbtn'></a><a href='php/delete_siswa.php?Del=<?php echo $id_siswa ?>'><input type='submit' value='Delete' id='deletebtn'></a></td>

                                        </tr>
                                        <?php
                                        $nomor++;
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
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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

</html>