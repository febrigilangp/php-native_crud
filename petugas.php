<?php 
include ('koneksi.php');
$sql = mysqli_query($conn, "select * from petugas");
?>
<html>
<head>
	<title>List Petugas</title>
</head>
<body>
	<h2>List Petugas Rental Mobil Bendicar</h2>
	<a href= "petugas_tambah.php"> TAMBAH DATA </a> <br><br>
	<table border='1' cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>ID Petugas</th>
			<th>Nama Petugas</th>
			<th>Jenis Kelamin</th>
			<th>Jabatan</th>
			<th>Gaji</th>
		</tr>
		<?php 
		$no = 1;
		while ($row = mysqli_fetch_assoc($sql)) { ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $row["id_petugas"]; ?></td>
				<td><?= $row["nm_petugas"]; ?></td>
				<td><?= $row["jk"]; ?></td>
				<td><?= $row["jabatan"]; ?></td>
				<td><?= $row["gaji"]; ?></td>
				<td>
					<a href= "petugas_update.php?id_petugas=<?php echo $row['id_petugas']; ?>">UPDATE</a>
					<a href= "petugas_hapus.php?nm_petugas=<?php echo $row['nm_petugas']; ?>"">DELETE</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>