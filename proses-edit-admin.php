<?php
require 'koneksi.php';

if (isset($_GET['id_admin'])) {
  $id = $_GET['id_admin'];
  $nama = $_GET['nama'];
  $email = $_GET['email'];
  $pass = $_GET['pass']; // Sama, sebaiknya di-hash kalau untuk produksi

  $query = mysqli_query($koneksi, "UPDATE admin SET nama='$nama', email='$email', pass='$pass' WHERE id_admin='$id'");

  if ($query) {
    header("Location: profile.php");
  } else {
    echo "Gagal mengubah data";
  }
} else {
  echo "ID tidak ditemukan";
}
