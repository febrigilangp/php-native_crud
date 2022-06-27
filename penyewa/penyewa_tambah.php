<?php 
include ('koneksi.php');

if (isset($_POST["enter"])) {
	$id_sew = $_POST["id_penyewa"];
	$nm_sew = $_POST["nm_penyewa"];
	$Jk = $_POST["jk"];
	$almt_sew = $_POST["alamat_penyewa"];
	$nohp = $_POST["no_hp"];
	$sql = "INSERT INTO penyewa VALUES ('$id_sew', '$nm_sew', '$Jk', '$almt_sew', '$nohp')";
		$hasil = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH PENYEWA</title>
</head>
<body>
	<h2>FORM TAMBAH PENYEWA</h2>
	<form action="" method="post">
		<ul>
			<li>
				<label>ID Penyewa</label>
				<input type="text" name="id_penyewa">
			</li>
			<li>
				<label>Nama Penyewa</label>
				<input type="text" name="nm_penyewa">
			</li>
			<li>
				<label>Jenis Kelamin</label>
				<input type="text" name="jk">
			</li>
			<li>
				<label>Alamat Penyewa</label>
				<input type="text" name="alamat_penyewa">
			</li>
			<li>
				<label>No HP</label>
				<input type="text" name="no_hp">
			</li>
			<li>
				<label></label>
				<button type="submit" name="enter">Submit</button>
			</li>
		</ul>
	</form>
</body>
</html>