<?php
	include('koneksi.php');
	$id_penyewa= $_GET['id_penyewa'];
	$sql = mysqli_query($conn, "SELECT * FROM penyewa WHERE id_penyewa='$id_penyewa'");
	$hasil = mysqli_fetch_array($sql);

if (isset($_POST["enter"])) {
		$id_penyewa = $_POST["id_penyewa"];
		$nm_penyewa = $_POST["nm_penyewa"];
		$jk = $_POST["jk"];
		$alamat_penyewa = $_POST["alamat_penyewa"];
		$no_hp = $_POST["no_hp"];
   		$sql = mysqli_query($conn, "UPDATE penyewa set nm_penyewa='$nm_penyewa', jk='$jk', alamat_penyewa='$alamat_penyewa', no_hp='$no_hp' WHERE id_penyewa='$id_penyewa'");
   		header('location: penyewa.php');
   		exit;
}
?>


<!DOCTYPE HTML>
<html>
<head>
	<title>UPDATE PENYEWA</title>
<body>
	<h2>FORM UPDATE PENYEWA</h2>
	<form action="" method="post">
		<ul>
			<li>
			<label>ID Penyewa</label><br>
			<input type ="text" name="id_penyewa" readonly value="<?=$hasil["id_penyewa"];?>">
			</li>

			<li>
			<label>Nama Penyewa</label><br>
			<input type ="text" name="nm_penyewa" value="<?=$hasil["nm_penyewa"];?>">
			</li>

			<li>
			 <label>Jenis kelamin</label><br>
            <label><input type="radio" name="jk" value="L" <?php if($hasil['jk']=='L') echo 'checked'?>> Laki-laki</label>
            <label><input type="radio" name="jk" value="P" <?php if($hasil['jk']=='P') echo 'checked'?>> Perempuan</label>
			</li>

			<li>
			<label>Akamat Penyewa</label><br>
			<input type="text" name="alamat_penyewa" value="<?=$hasil["alamat_penyewa"];?>">
			</li>

			<li>
			<label>No Hp</label><br>
			<input type="text" name="no_hp" value="<?=$hasil["no_hp"];?>">
			</li>

			<li>
			<label></label>
			<button type="submit" name="enter">SIMPAN</button> <button><a href="penyewa.php">KEMBALI</a></button></td></li>
		</ul>
	</form>
</body>
</html>