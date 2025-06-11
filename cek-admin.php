<?php
require 'cek-sesi.php';

if ($_SESSION['level'] != "admin") {
  header("location:index_user.php?pesan=akses_ditolak");
  exit;
}
