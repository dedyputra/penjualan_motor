<?php
require 'cek-sesi.php';
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['id_admin'])) {
    $id = intval($_POST['id_admin']);

    // Cegah hapus super admin
    if ($id === 1) {
      header('Location: profile.php?pesan=tidak-boleh-hapus-superadmin');
      exit;
    }

    // Eksekusi DELETE
    $query = mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin = '$id'");

    if ($query) {
      header('Location: profile.php?pesan=hapus-berhasil');
    } else {
      header('Location: profile.php?pesan=hapus-gagal');
    }
  } else {
    header('Location: profile.php?pesan=data-tidak-valid');
  }
} else {
  header('Location: profile.php');
}
// Jika bukan POST, redirect ke profile.php