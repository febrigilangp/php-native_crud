<?php 
include 'koneksi.php';
$nm_petugas = $_GET['nm_petugas'];
$sql = mysqli_query($conn, "DELETE FROM petugas where nm_petugas='$nm_petugas'");
 header("location:petugas.php?pesan=hapus");
?>