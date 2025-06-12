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


// Hapus admin jika ada parameter GET hapus
if (isset($_GET['hapus'])) {
	$hapus_id = $_GET['hapus'];
	if ($hapus_id != 1) {
		mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin='$hapus_id'");
		echo "<script>window.location.href='profile.php';</script>";
		exit;
	} else {
		echo "<script>alert('Admin utama tidak boleh dihapus!');</script>";
	}
}

// Cek apakah session sudah dimulai, jika belum, mulai session
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
	header("location:login.php?pesan=belum_login");
	exit;
}
