<?php
	

		if (isset($_GET['pilih'])) {
			$sql = mysqli_query($con, "SELECT * FROM tb_menu WHERE id_menu = '$_GET[id]'");
			$d = mysqli_fetch_array($sql);
		}
		$_SESSION['idTr'] = "";
		if ($_SESSION['idTr'] == '') {
				$idT = "TR".$_SESSION['noMeja'].date('mdH');
		}else{
				$idT = $_SESSION['idTr'];
		}

		if (isset($_POST['simpan'])) {
			$tgl = "20".date('y-m-d');
			$sql = mysqli_query($con, "INSERT INTO tb_keranjang VALUES('', '$_SESSION[noMeja]', '$idT', '$_GET[id]', '$_POST[jml]', '$tgl')");
			if($sql) {
				echo "<script>alert('Berhasil');document.location.href = '?menu=pesan'</script>";
			}
		}
		if(isset($_GET['hapus'])){
			$sql = mysqli_query($con, "DELETE FROM tb_keranjang WHERE id_pesan = '$_GET[id]'");
		}

		if(isset($_POST['pesan'])) {
			$sql = mysqli_query($con, "INSERT INTO tb_pesanan(id_pesan, no_meja, id_transaksi, id_menu, jumlah, tgl_pesan ) SELECT * FROM tb_keranjang WHERE no_meja = '$_SESSION[noMeja]'");
			$sql = mysqli_query($con, "DELETE FROM tb_keranjang WHERE no_meja = '$_SESSION[noMeja]'");
			echo mysqli_error($con);
		}
	?>

			<table border="1">
				<tr>
					<td colspan="6"><h2>Daftar Menu</h2></td>
				</tr>
				<tr>
					<td>No.</td>
					<td>Foto</td>
					<td>Nama Menu</td>
					<td>Jenis</td>
					<td>Harga</td>
					<td>Aksi</td>
				</tr>
				<?php
					$no = 0;
					$sql = mysqli_query($con, "SELECT * FROM tb_menu WHERE stok != '0'");
					while ($r=mysqli_fetch_array($sql)) {  $no++;
				?>

				<tr>
					<td><?php    echo   $no;  ?></td>
					<td><img src="../image/<?php  echo $r['foto']  ?>" width = "100"> </td>
					<td><?php   echo   $r['nama_menu'];   ?></td>
					<td><?php   echo   $r['jenis'];   ?></td>
					<td><?php   echo   $r['harga'];   ?></td>
					<td><a href = "?menu=pesan&pilih&id=<?php echo $r['id_menu'] ?>">Pilih</a></td>
				</tr>
			<?php    }   ?>
		</table>
		<br>
		<table border="1">
			<tr>
				<td colspan="3"><h2>Detail Pesanan</h2></td>
			</tr>
			<tr>
				<td>ID Transaksi</td>
				<td>:</td>
				<td><?php   echo  $idT; ?></td>
			</tr>
			<tr>
				<td>Nama Menu</td>
				<td>:</td>
				<td><?php   echo @$d['nama_menu'] ?></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="number" name="jml"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
		<br>
		<table border="1">
			<tr>
				<td colspan="6"><h2>Keranjang</h2></td>
			</tr>
			<tr>
				<td>No</td>
				<td>No Meja</td>
				<td>ID Transaksi</td>
				<td>Nama Menu</td>
				<td>Jumlah</td>
				<td>Batal</td>
			</tr>
			<?php
					$no=0;
					$sql = mysqli_query($con, "SELECT tb_keranjang.*, tb_menu.nama_menu FROM tb_keranjang INNER JOIN tb_menu ON tb_keranjang.id_menu = tb_menu.id_menu WHERE no_meja = ' $_SESSION[noMeja]'");
					while($aaa = mysqli_fetch_array($sql))    {   $no++;
		    ?>

		    <tr>
		    	<td><?php  echo  $no;  ?></td>
		    	<td><?php  echo  $aaa['no_meja'];  ?></td>
		    	<td><?php  echo  $aaa['id_transaksi'];  ?></td>
		    	<td><?php  echo  $aaa['nama_menu'];  ?></td>
		    	<td><?php  echo  $aaa['jumlah'];  ?></td>
		    	<td><a href = "?menu=pesan&hapus&id=<?php  echo  $aaa['id_pesan']  ?>">Hapus</a></td>
		    </tr>
		<?php    }   ?>
		<tr>
			<td colspan="6"><input type="submit" name="pesan" value="Pesan"></td>
		</tr>
	</table>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
				body{
					background: yellowgreen;
  					padding:0;
  					margin:0;
  					
				}
			</style>

</head>
<body>

</body>
</html>


		