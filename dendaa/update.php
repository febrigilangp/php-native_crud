<?php 
include 'koneksi.php';
// menangkap data yang di kirim dari form
$nm_denda  = $_POST['nama_denda'];
$idenda    = $_POST['id_denda'];
$harga     = $_POST['harga_denda'];

//echo $idenda;
//die();

 
// update data ke database
$query_update ="UPDATE denda SET id_denda='$idenda',harga_denda='$harga' WHERE nama_denda='$nm_denda'";
mysqli_query($conn, $query_update);
// mengalihkan halaman kembali ke denda.php
header ('location:denda.php');
 
?>