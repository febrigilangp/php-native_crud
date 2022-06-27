<?php 
include ('koneksi.php');

if (isset($_POST["enter"])) {
	$nopol = $_POST["no_pol"];
	$jenis = $_POST["jenis"];
	$merek = $_POST["merek"];
	$hrgSewa = $_POST["harga_sewa"];
	$sql = "INSERT INTO kendaraan VALUES ('$nopol', '$jenis', '$merek', '$hrgSewa')";
	$hasil = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH KENDARAAN</title>
</head>
<body>
	<h2>FORM TAMBAH KENDARAAN</h2>
	<form action="" method="post">
		<ul>
			<li>
				<label>No Polisi</label>
				<input type="text" name="no_pol">
			</li>
			<li>
				<label>Jenis</label>
				<input type="text" name="jenis">
			</li>
			<li>
				<label>Merek</label>
				<input type="text" name="merek">
			</li>
			<li>
				<label>Harga Sewa</label>
				<input type="text" name="harga_sewa">
			</li>
			<li>
				<label></label>
				<button type="submit" name="enter">Submit</button>
			</li>
		</ul>
	</form>
</body>
</html>