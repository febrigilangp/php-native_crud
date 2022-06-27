<?php 
include 'koneksi.php';
$nm_penyewa = $_GET['nm_penyewa'];
$sql = mysqli_query($conn, "DELETE FROM penyewa where nm_penyewa='$nm_penyewa'");
 header("location:penyewa.php?pesan=hapus");
?>