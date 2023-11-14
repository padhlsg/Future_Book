<?php 
// koneksi database
include ("config.php");
 
// menangkap data id yang di kirim dari url
$id = $_GET['buku_id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM buku where id ='$id'");
 
header("location:admin_control.php");
 
?>