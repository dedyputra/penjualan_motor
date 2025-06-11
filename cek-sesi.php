<?php
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
require 'koneksi.php';

// Cek apakah session sudah login
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
	header("location:login.php?pesan=belum_login");
	exit;
}
