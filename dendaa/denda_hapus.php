<?php 
include 'koneksi.php';
$nm_denda = $_GET['nama_denda'];
$sql = mysqli_query($conn, "DELETE FROM denda where nama_denda='$nm_denda'");
 header("location:denda.php?pesan=hapus");
?>