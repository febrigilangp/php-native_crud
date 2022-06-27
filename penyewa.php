<?php 
include ('koneksi.php');
$sql = mysqli_query($conn, "select * from penyewa");
?>
<html>
<head>
	<title>List Penyewa</title>
</head>
<body>
	<h2>List Penyewa Rental Mobil Bendicar</h2>
	<a href= "penyewa_tambah.php"> TAMBAH DATA </a> <br><br>
	<table border='1' cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>ID Penyewa</th>
			<th>Nama Penyewa</th>
			<th>Jenis Kelamin</th>
			<th>Alamat Penyewa</th>
			<th>No HP</th>
		</tr>
		<?php 
		$no = 1;
		while ($row = mysqli_fetch_assoc($sql)) { ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $row["id_penyewa"]; ?></td>
				<td><?= $row["nm_penyewa"]; ?></td>
				<td><?= $row["jk"]; ?></td>
				<td><?= $row["alamat_penyewa"]; ?></td>
				<td><?= $row["no_hp"]; ?></td>
				<td>
					<a href= "penyewa_update.php?id_penyewa=<?php echo $row['id_penyewa']; ?>">UPDATE</a>
					<a href= "penyewa_hapus.php?nm_penyewa=<?php echo $row['nm_penyewa']; ?>">DELETE</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>