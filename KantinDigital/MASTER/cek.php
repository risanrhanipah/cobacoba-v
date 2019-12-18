<?php 
	session_start();
	include "koneksi.php";
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = mysqli_query($con,"SELECT * FROM tb_pengguna WHERE username='$username' AND 	password='$password'");
	$cek = mysqli_num_rows($sql);
	if ($cek > 0) {
		$_SESSION['status'] = 'login';
		$level = mysqli_query($con,"SELECT level FROM tb_pengguna WHERE username='$username'");
		while ($a = mysqli_fetch_array($level)) {
			header("location:index.php?level=$a[level]");
		}
	}else {
		header("location:admin.php");
	}

 ?>