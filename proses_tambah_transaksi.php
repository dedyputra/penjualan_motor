<?php
include 'koneksi.php';

$nama_pemesan = $_POST['nama_pemesan'];
$no_telp = $_POST['no_telp'];
$tgl_beli = $_POST['tgl_beli'];
$alamat = $_POST['alamat'];
$catatan = $_POST['catatan'];
$jumlah_beli = $_POST['jumlah_beli'];
$total_bayar = $_POST['total_bayar'];

$query = "INSERT INTO transaksi 
    (nama_pemesan, no_telp, tgl_beli, alamat, catatan, jumlah_beli, total_bayar) 
    VALUES 
    ('$nama_pemesan', '$no_telp', '$tgl_beli', '$alamat', '$catatan', $jumlah_beli, $total_bayar)";

if (mysqli_query($koneksi, $query)) {
	header("Location: index.php");
	exit();
} else {
	echo "Gagal menambahkan data: " . mysqli_error($koneksi);
}
