<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "future_book";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$koneksi) {
    echo ("<script>alert('GAGAL')</script>");
} 

function add() {
    global $koneksi;
    $judul_buku = $_POST["judul_buku"];
    $penerbit_buku = $_POST["penerbit_buku"];
    $pengarang_buku = $_POST["pengarang_buku"];
    $tanggal_terbit = $_POST["tanggal_terbit"];
    $kategori = $_POST["kategori"];

    $query = "INSERT INTO `perpus`(`login_id`, `judul_buku`, `penerbit_buku`, `pengarang_buku`, `tanggal_terbit`, `kategori`) VALUES ('','$judul_buku','$penerbit_buku','$pengarang_buku','$tanggal_terbit','$kategori')";

    mysqli_query($koneksi, $query);

return mysqli_affected_rows($koneksi);
}  
?>