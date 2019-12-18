<?php
		session_start();
		include '../MASTER/koneksi.php';
		?>

		<html>
				<head>
						<title>Kantin Digital</title>
					>
		</head>
		<form method="post">
			<body>
					<center>
						<h1><?php   echo "Selamat Datang Meja No ". $_SESSION['noMeja']; ?></h1>	
					</center>
						<ul>
							<li><a href="?menu=pesan">Pesan</a></li>
							<li><a href="?menu=statusPesan">Status Pesanan</a></li>
						</ul>

						<?php
							switch (@$_GET['menu']) {
								case 'pesan':
                                     include 'pesan.php';
									break;
								case 'statusPesan':
									 include 'statusPesan.php';
									break;
								
								default:
									include 'pesan.php';
									break;
							}
						?>
			</body>
		</form>
	</html>