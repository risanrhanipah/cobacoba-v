<?php
	session_start();
	if(isset($_POST['masuk'])) {
		$_SESSION['noMeja'] = $_POST['noMeja'];
		echo "<script>alert('Selamat Datang....');
		document.location.href = 'pelanggan/';</script>";
	}
	?>
	<html>
		<head>
			<title>Kantin Digital</title>
			<style type="text/css">
				body{
					background: url(image/kan.jpg);
  					padding:0;
  					margin:0;
  					background-size: cover;
				}
			</style>

							
	</head>
	<form method="post">
		<body>
			<center>
				<h1>Selamat Datang</h1>
				<table>
					<tr>
						<td colspan="3">Masukkan No. Meja</td>
					</tr>
					<tr>
						<td>No. Meja</td>
						<td> : </td>
						<td><input type="text" name="noMeja" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="masuk" value="Masuk"></td>
					</tr>
				</table>
			</center>
		</body>
	</form>
</html>