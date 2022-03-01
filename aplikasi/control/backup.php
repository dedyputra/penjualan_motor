<?php

include 'koneksi.php';

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

session_start();

if (isset($_SESSION['id_admin'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	// code...
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$query =  "SELECT * FROM user_admin WHERE email = '$email' AND password = '$password'";
	$result = $conn->query($query);

	if ($result->num_rows >= 1) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['id_admin'] = $row['id_admin'];
		header("location:index.php");
	} else {
		echo "maaf username dan password anda salah";
	}
}

?>