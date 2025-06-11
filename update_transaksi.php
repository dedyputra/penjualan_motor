<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_pemesan'];
$no_telp = $_POST['no_telp'];
$tgl_beli = $_POST['tgl_beli'];
$alamat = $_POST['alamat'];
$catatan = $_POST['catatan'];
$jumlah_beli = $_POST['jumlah_beli'];
$total_bayar = $_POST['total_bayar'];

$query = "UPDATE transaksi SET 
    nama_pemesan = '$nama',
    no_telp = '$no_telp',
    tgl_beli = '$tgl_beli',
    alamat = '$alamat',
    catatan = '$catatan',
    jumlah_beli = '$jumlah_beli',
    total_bayar = '$total_bayar'
    WHERE id_transaksi = '$id'";

if (mysqli_query($koneksi, $query)) {
  header("Location: data_transaksi.php?update=success");
} else {
  echo "Gagal update data: " . mysqli_error($koneksi);
}
