<?php

include 'koneksi.php';

$nama_pemesan = $_POST['nama_pemesan'];
$no_telp = $_POST['no_telp'];
$tgl_beli = $_POST['tgl_beli'];
$alamat = $_POST['alamat'];
$catatan = $_POST['catatan'];
$jumlah_beli = $_POST['jumlah_beli'];
$total_bayar = $_POST['total_bayar'];


$sql = mysqli_query($koneksi, "INSERT INTO transaksi (nama_pemesan,no_telp,tgl_beli,alamat,catatan,jumlah_beli, total_bayar)
VALUES ('$nama_pemesan','$no_telp','$tgl_beli','$alamat','$catatan', $jumlah_beli, $total_bayar)");
header("location:index.php");

if (mysqli_query($koneksi, $sql)) {
	header("Location: index.php");
} else {
	echo "Tambah data gagal";
}
