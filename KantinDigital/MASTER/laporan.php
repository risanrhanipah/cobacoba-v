<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		Code sample
body { // styles applied to body tag
  background-color: lightblue;
  text-align: center;
  font-size: 20px;
}
	</style>
</head>
<?php
	if(isset($_POST['cetak'])) {
		echo "<script>document.location.href='cetak.php'</script>";

	}
	?>
<body>
	<table>
		<tr>
			<td> Dari : </td>
			<td><input type="date" name="awal"></td>
			<td>-</td>
			<td> Sampai : </td>
			<td><input type="date" name="akhir"></td>
			<td><input type="submit" name="cari" value="cari"></td>
		</tr>
	</table>
	<table border="1">
		<tr>
			<th>No</th>
			<th>ID Transaksi</th>
			<th>Nama Menu</th>
			<th>Jumlah</th>
			<th>Tanggal Pesan</th>
		</tr>
		<?php     if(isset($_POST['cari'])){ ?>
		<?php
			
				$_SESSION['awal'] = $_POST['awal'];
				$_SESSION['akhir'] = $_POST['akhir'];
				$no=0;
				$sql = mysqli_query($con, "SELECT * FROM qw_laporan WHERE tgl_pesan BETWEEN '$_POST[awal]' AND '$_POST[akhir]' AND status = '1' ");
				while($r= mysqli_fetch_array($sql)) {
					$no++;
					?>
					<tr>
						<td><?php echo $no; ?></td>

						<td><?php echo $r['id_transaksi']; ?></td>

						<td><?php echo $r['nama_menu']; ?></td>
						<td><?php echo $r['jumlah']; ?></td>
						<td><?php echo $r['tgl_pesan']; ?></td>
					</tr>
				<?php } ?>
				<?php }else{ ?>
					<tr>
						<td colspan="5">Tanggal Belum di Input</td>
					</tr>
				<?php    }   ?>
			</table>
			<br>
			<input type="submit" name="cetak" value="cetak">

</body>
