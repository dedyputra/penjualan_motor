<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$detail = $_POST['detail'];

$namaFile = $_FILES['gambar']['name'];
$namaSementara = $_FILES['gambar']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "upload/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

if (!$terupload) {
	echo "Upload Gagal!";
	die();
}

$path = $dirUpload . $namaFile;

$sql = mysqli_query($koneksi, "INSERT INTO motor (nama,harga,tipe,stok,gambar,detail)
VALUES ('$nama','$harga','$tipe','$stok','$path','$detail')");
header("location:index.php");

if (mysqli_query($koneksi, $sql)) {
	header("Location: index.php");
} else {
	echo "Tambah data gagal";
}
