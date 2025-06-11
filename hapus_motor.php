<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "DELETE FROM motor WHERE id_motor = '$id'";
  $result = mysqli_query($koneksi, $query);

  if ($result) {
    header("Location: data_motor.php");
    exit();
  } else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
  }
} else {
  echo "ID tidak ditemukan.";
}
