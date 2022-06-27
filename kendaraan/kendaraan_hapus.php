<?php 
include 'koneksi.php';
$nopol = $_GET['no_pol'];
$sql = mysqli_query($conn, "DELETE FROM kendaraan where no_pol='$nopol'");
 header("location:kendaraan.php?pesan=hapus");
?>