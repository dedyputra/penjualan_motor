<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM transaksi WHERE id_transaksi = '$id'";

if (mysqli_query($koneksi, $query)) {
  header("Location: data_transaksi.php?hapus=success");
} else {
  echo "Gagal hapus data: " . mysqli_error($koneksi);
}
