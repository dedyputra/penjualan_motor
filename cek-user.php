<?php
require 'cek-sesi.php';

if ($_SESSION['level'] != "user") {
  header("location:index.php?pesan=akses_ditolak");
  exit;
}
