<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id_motor = $_POST['id_motor'];
  $nama = $_POST['nama'];
  $tipe = $_POST['tipe'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];
  $detail = $_POST['detail'];

  if (!empty($id_motor)) {
    $query = "UPDATE motor SET 
                nama = '$nama', 
                tipe = '$tipe', 
                harga = '$harga', 
                stok = '$stok', 
                detail = '$detail' 
              WHERE id_motor = '$id_motor'";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
      header("Location: data_motor.php");
      exit();
    } else {
      die("Query Error: " . mysqli_error($koneksi));
    }
  } else {
    die("ID Motor kosong");
  }
} else {
  die("Form tidak dikirim via POST");
}
