<?php
session_start();
include 'koneksi.php';

$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$pass = mysqli_real_escape_string($koneksi, $_POST['pass']);

// Cek data berdasarkan email dan password
$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email' AND pass='$pass'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	$sesi = mysqli_fetch_assoc($data);
	$_SESSION['id'] = $sesi['id_admin'];
	$_SESSION['nama'] = $sesi['nama'];
	$_SESSION['status'] = "login";
	$_SESSION['level'] = $sesi['level']; // bisa 'admin' atau 'user'

	// Redirect berdasarkan level
	if ($sesi['level'] == "admin") {
		header("Location: index.php"); // halaman dashboard admin
	} elseif ($sesi['level'] == "user") {
		header("Location: index_user.php"); // halaman dashboard user
	} else {
		echo "Level tidak dikenal.";
	}
} else {
	header("Location: login.php?pesan=gagal");
}
