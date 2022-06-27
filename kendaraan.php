<?php 
include ('koneksi.php');
$sql = mysqli_query($conn, "select * from kendaraan");
?>
<html>
<head>
	<title>List Kendaraan</title>
</head>
<body>
	<h2>List kendaraan Rental Mobil Bendicar</h2>
	<a href= "kendaraan_tambah.php"> TAMBAH DATA </a> <br><br>
	<table border='1' cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>No Polisi</th>
			<th>Jenis</th>
			<th>Merek</th>
			<th>Harga Sewa</th>
		</tr>
		<?php 
		$no = 1;
		while ($row = mysqli_fetch_assoc($sql)) { ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $row["no_pol"]; ?></td>
				<td><?= $row["jenis"]; ?></td>
				<td><?= $row["merek"]; ?></td>
				<td><?= $row["harga_sewa"]; ?></td>
				<td>
					<a href= "kendaraan_update.php?no_pol=<?php echo $row['no_pol']; ?>">UPDATE</a>
					<a href= "kendaraan_hapus.php?no_pol=<?php echo $row['no_pol']; ?>">DELETE</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>