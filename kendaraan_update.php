
<?php
	include('koneksi.php');
	$no_pol= $_GET['no_pol'];
	$sql = mysqli_query($conn, "SELECT * FROM kendaraan WHERE no_pol='$no_pol'");
	$hasil = mysqli_fetch_array($sql);

if (isset($_POST["enter"])) {
		$no_pol= $_POST["no_pol"];
		$jenis= $_POST["jenis"];
		$merek= $_POST["merek"];
		$harga_sewa = $_POST["harga_sewa"];
   		$sql = mysqli_query($conn, "UPDATE kendaraan set jenis='$jenis', merek='$merek', harga_sewa='$harga_sewa' WHERE no_pol='$no_pol'");
   		header('location: kendaraan.php');
   		exit;
}
?>


<!DOCTYPE HTML>
<html>
<head>
	<title>UPDATE KENDARAAN</title>
<body>
	<h2>FORM UPDATE KENDARAAN</h2>
	<form action="" method="post">
		<ul>
			<li>
			<label>No Pol</label><br>
			<input type ="text" name="no_pol" 	readonly value="<?=$hasil["no_pol"];?>">
			</li>

			<li>
			<label>Jenis</label><br>
			<input type ="text" name="jenis" value="<?=$hasil["jenis"];?>">
			</li>


			<li>
			<label>Merek</label><br>
			<input type="text" name="merek" value="<?=$hasil["merek"];?>">
			</li>

			<li>
			<label>Harga sewa</label><br>
			<input type="text" name="harga_sewa" value="<?=$hasil["harga_sewa"];?>">
			</li>

			<li>
			<label></label>
			<button type="submit" name="enter">SIMPAN</button> <button><a href="kendaraan.php">KEMBALI</a></button></td></li>
		</ul>
	</form>
</body>
</html>