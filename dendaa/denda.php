<?php 
include ('koneksi.php');
$sql = mysqli_query($conn, "select * from denda");
?>
<html>
<head>
	<title>List Denda</title>
</head>
<body>
	<h2>List Denda Rental Mobil Bendicar</h2>
	<a href= "denda_tambah.php"> TAMBAH DATA </a> <br><br>
	<table border='1' cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Jenis Denda</th>
			<th>Harga</th>
			<th>AKSI</th>
		</tr>
		<?php 
		$no = 1;
		while ($row = mysqli_fetch_assoc($sql)) { ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $row["nama_denda"]; ?></td>
				<td><?= $row["harga_denda"]; ?></td>
				<td>
					<a href= "denda_update.php?id_denda=<?php echo $row['id_denda']; ?>">UPDATE</a>
					<a href= "denda_hapus.php?nama_denda=<?php echo $row['nama_denda']; ?>"">DELETE</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>