<?php
include 'koneksi.php';
$id_motor = $_POST['id_motor'];
$nama = $_POST['nama'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$detail = $_POST['detail'];

$data = mysqli_query($koneksi, "select * from motor where id_motor='$id'");

mysqli_query($koneksi, "update transaksi set nama='$nama', tipe='$tipe', harga='$harga', stok='$stok', detail='$detail' where id_motor='$id'") or die(mysqli_error($koneksi));
header("location:data_motor.php");
