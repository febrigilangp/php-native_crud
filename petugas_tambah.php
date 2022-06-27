<?php 
include ('koneksi.php');

if (isset($_POST["enter"])) {
	$id_pet = $_POST["id_petugas"];
	$nm_pet = $_POST["nm_petugas"];
	$Jk = $_POST["jk"];
	$jbt = $_POST["jabatan"];
	$Gaji = $_POST["gaji"];
	$sql = "INSERT INTO petugas VALUES ('$id_pet', '$nm_pet', '$Jk', '$jbt', '$Gaji')";
	$hasil = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH PETUGAS</title>
</head>
<body>
	<h2>FORM TAMBAH PETUGAS</h2>
	<form action="" method="post">
		<ul>
			<li>
				<label>ID Petugas</label>
				<input type="text" name="id_petugas">
			</li>
			<li>
				<label>Nama Petugas</label>
				<input type="text" name="nm_petugas">
			</li>
			<li>
				<label>Jenis Kelamin</label>
				<input type="text" name="jk">
			</li>
			<li>
				<label>Jabatan</label>
				<input type="text" name="jabatan">
			</li>
			<li>
				<label>Gaji</label>
				<input type="text" name="gaji">
			</li>
			<li>
				<label></label>
				<button type="submit" name="enter">Submit</button>
			</li>
		</ul>
	</form>
</body>
</html>