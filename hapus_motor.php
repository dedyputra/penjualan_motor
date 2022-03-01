<?php 
include 'koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from motor where id_motor='$id'");
header("location:data_motor.php");
