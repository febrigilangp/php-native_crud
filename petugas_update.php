<?php
	include('koneksi.php');
	$id_petugas = $_GET['id_petugas'];
	$sql = mysqli_query($conn, "SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
	$hasil = mysqli_fetch_array($sql);

if (isset($_POST["enter"])) {
		$id_petugas = $_POST["id_petugas"];
		$nm_petugas = $_POST["nm_petugas"];
		$jk = $_POST["jk"];
		$jabatan = $_POST["jabatan"];
		$gaji = $_POST["gaji"];
   		$sql = mysqli_query($conn, "UPDATE petugas set nm_petugas='$nm_petugas', jk='$jk', jabatan='$jabatan', gaji='$gaji' WHERE id_petugas='$id_petugas'");
   		header('location: petugas.php');
   		exit;
}
?>


<!DOCTYPE HTML>
<html>
<head>
	<title>UPDATE PETUGAS</title>
<body>
	<h2>FORM UPDATE PETUGAS</h2>
	<form action="" method="post">
		<ul>
			<li>
			<label>ID Petugas</label><br>
			<input type ="text" name="id_petugas" readonly value="<?=$hasil["id_petugas"];?>">
			</li>

			<li>
			<label>Nama Petugas</label><br>
			<input type ="text" name="nm_petugas" value="<?=$hasil["nm_petugas"];?>">
			</li>

			<li>
			 <label>Jenis kelamin</label><br>
            <label><input type="radio" name="jk" value="L" <?php if($hasil['jk']=='L') echo 'checked'?>> Laki-laki</label>
            <label><input type="radio" name="jk" value="P" <?php if($hasil['jk']=='P') echo 'checked'?>> Perempuan</label>
			</li>

			<li>
			<label>Jabatan</label><br>
			<input type="text" name="jabatan" value="<?=$hasil["jabatan"];?>">
			</li>

			<li>
			<label>gaji</label><br>
			<input type="text" name="gaji" value="<?=$hasil["gaji"];?>">
			</li>

			<li>
			<label></label>
			<button type="submit" name="enter">SIMPAN</button> <button><a href="petugas.php">KEMBALI</a></button></td></li>
		</ul>
	</form>
</body>
</html>