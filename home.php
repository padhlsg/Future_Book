<?php
session_start();
include("config.php");
if (!isset($_SESSION['username'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home</title>
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <section id="hero">
      <div class="hero">
        <div class="container">
          <nav>
            <div class="menu">
            <?php if($_SESSION['username'] === "admin") { ?>
            <a href="admin_control.php">Admin</a>
            <?php } ?>
              <div class="dropdown">
                <a href="#">Profile</a>
                <div class="drop">
                  <a href="struktur.php">Struktur Organisasi</a>
                  <a href="panduan.php">Panduan Perpustakaan</a>
                  <a href="tatatertib.php">Tata Tertib Perpustakaan</a>
                  <a href="faq.php">FAQ</a>
                </div>
              </div>
              <div class="dropdown">
                <a href="#">Aktifitas</a>
                <div class="drop">
                  <a href="galeri.php">Galeri</a>
                  <a href="#">Berita</a>
                  <a href="#">Pengumuman</a>
                </div>
              </div>
              <div class="profile">
                <a href="profile.php"
                  ><i class="fa-solid fa-user" style="font-size: 25px"><p>Fuad Gunawan</p></i></a
                >
                <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" style="font-size: 25px"></i></a>
              </div>
            </div>
          </nav>
          <div class="title">
            <h1>Future Book</h1>
            <p>The Window of Knowledge in the Digital Era, Illuminating Our Future!</p>
          </div>
        </div>
      </div>
    </section>

    <section id="kategori">
      <div class="dropdown" id="dropdown-kategori">
        <a href="#">Kategori</a>
        <div class="drop">
          <a href="#buku-pelajaran">Pelajaran</a>
          <a href="#buku-fiksi">Fiksi</a>
          <a href="#buku-biografi">Biografi</a>
        </div>
      </div>
      <div class="container-buku">
        <div class="container-buku" id="buku-pelajaran">
          <div class="judul-pelajaran">
            <p>Pelajaran</p>
          </div>
          <div class="buku-buku">
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
          </div>
        </div>
        <hr />
        <div class="container-buku" id="buku-fiksi">
          <div class="judul-pelajaran">
            <p>Fiksi</p>
          </div>
          <div class="buku-buku">
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
          </div>
        </div>
        <hr />
        <div class="container-buku" id="buku-biografi">
          <div class="judul-pelajaran">
            <p>Biografi</p>
          </div>
          <div class="buku-buku">
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
            <div class="buku">
              <img src="img/BUKU PJOK UNTUK SISWA KELAS X - BSE Kemendikbud.png" alt="" />
              <a href="pinjam.php">PINJAM</a>
            </div>
          </div>
        </div>
      </div>
    </section>  
  </body>
</html>

</body>
</html>