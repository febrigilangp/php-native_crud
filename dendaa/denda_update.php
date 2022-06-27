<?php
	include('koneksi.php');
	$id_denda= $_GET['id_denda'];
	$sql = mysqli_query($conn, " SELECT * FROM denda WHERE id_denda='$id_denda'");
	$hasil = mysqli_fetch_array($sql);

if (isset($_POST["enter"])) {
		$id_denda = $_POST["id_denda"];
		$nama_denda = $_POST["nama_denda"];
		$harga_denda= $_POST["harga_denda"];
   		$sql = mysqli_query($conn, "UPDATE denda set nama_denda='$nama_denda', harga_denda='$harga_denda' WHERE id_denda='$id_denda'");
   		header('location: denda.php');
   		exit;
}
?>


<!DOCTYPE HTML>
<html><body>
<head>ss
	<title>UPDATE DENDA</title>

	<h2>FORM UPDATE DENDA</h2>
	<form action="" method="post">
		<ul>
			<li>
			<label>ID Denda</label><br>
			<input type ="text" name="id_denda" readonly value="<?=$hasil["id_denda"];?>">
			</li>

			<li>
			<label>Nama Denda</label><br>
			<input type ="text" name="nama_denda" value="<?=$hasil["nama_denda"];?>">
			</li>

			<li>
			<label>Harga Denda</label><br>
			<input type="text" name="harga_denda" value="<?=$hasil["harga_denda"];?>">
			</li>

			<li>
			<label></label>
			<button type="submit" name="enter">SIMPAN</button> <button><a href="denda.php">KEMBALI</a></button></td></li>
		</ul>
	</form>
</body>
</html>