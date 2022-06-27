<?php 
include ('koneksi.php');

if (isset($_POST["enter"])) {
	$idenda = $_POST["id_denda"];
	$denda = $_POST["nama_denda"];
	$harga = $_POST["harga_denda"];
	$sql = "INSERT INTO denda VALUES ('$idenda', '$denda', '$harga')";
	$hasil = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DENDA</title>
</head>
<body>
	<h2>FORM TAMBAH DENDA</h2>
	<form action="" method="post">
		<ul>
			<li>
				<label>id Denda</label>
				<input type="text" name="id_denda">
			</li>
			<li>
				<label>Nama Denda</label>
				<input type="text" name="nama_denda">
			</li>
			<li>
				<label>Harga Denda</label>
				<input type="text" name="harga_denda">
			</li>
			<li>
				<label></label>
				<button type="submit" name="enter">Submit</button>
			</li>
		</ul>
	</form>
</body>
</html>