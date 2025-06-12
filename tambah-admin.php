<?php
require 'koneksi.php';

if (isset($_GET['nama']) && isset($_GET['email']) && isset($_GET['pass'])) {
  $nama = $_GET['nama'];
  $email = $_GET['email'];
  $pass = $_GET['pass']; // Disarankan dienkripsi, misal: password_hash($pass, PASSWORD_DEFAULT)

  $query = mysqli_query($koneksi, "INSERT INTO admin (nama, email, pass) VALUES ('$nama', '$email', '$pass')");

  if ($query) {
    header("Location: profile.php");
  } else {
    echo "Gagal menambahkan data";
  }
} else {
  echo "Data tidak lengkap";
}
