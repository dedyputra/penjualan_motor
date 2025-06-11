<?php
include 'koneksi.php';

// Ambil data dari form
$nama   = $_POST['nama'];
$tipe   = $_POST['tipe'];
$harga  = $_POST['harga'];
$stok   = $_POST['stok'];
$detail = $_POST['detail'];

// Upload file
$namaFile      = $_FILES['gambar']['name'];
$tmpFile       = $_FILES['gambar']['tmp_name'];
$ukuranFile    = $_FILES['gambar']['size'];
$extValid      = ['jpg', 'jpeg', 'png', 'gif'];
$uploadDir     = "upload/";
$ext           = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));

// Validasi ekstensi file
if (!in_array($ext, $extValid)) {
	echo "Format gambar tidak didukung. Hanya jpg, jpeg, png, gif.";
	exit;
}

// Validasi ukuran file (maks 2MB)
if ($ukuranFile > 2 * 1024 * 1024) {
	echo "Ukuran file terlalu besar. Maksimum 2MB.";
	exit;
}

// Rename file dengan nama unik
$namaBaru = uniqid('motor_', true) . '.' . $ext;
$path     = $uploadDir . $namaBaru;

// Pindahkan file
if (move_uploaded_file($tmpFile, $path)) {
	// Gunakan prepared statement untuk mencegah SQL injection
	$stmt = $koneksi->prepare("INSERT INTO motor (nama, harga, tipe, stok, gambar, detail) VALUES (?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sissss", $nama, $harga, $tipe, $stok, $path, $detail);

	if ($stmt->execute()) {
		header("Location: index.php");
		exit;
	} else {
		echo "Gagal menambahkan data: " . $stmt->error;
	}
	$stmt->close();
} else {
	echo "Upload gambar gagal!";
}
