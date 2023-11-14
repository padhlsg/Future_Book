<?php

require 'config.php';
$i= 1;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Control</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="sidebar">
        <div class="container-sidebar">
                <div class="title">
                    <p>Admin Page</p>
                </div>
                <div class="sidebar-menu">
                    <ul>
                        <li><a href="#buku">Book</a></li>
                        <li><a href="#buku">User</a></li>
                        <li><a href="home.php">Admin - Home</a></li>
                    </ul>
                </div>
        </div>
    </div>
    <div class="container-buku">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Penulis Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM buku";
                $result = $koneksi->query($sql);

                if(!$result) {
                    die("Invalid query: " . $conn->error);
                }


                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" .$i."</td>
                    <td>" .$row["judul_buku"] ."</td>
                    <td>" .$row["penulis_buku"] ."</td>
                    <td>" .$row["tahun_terbit"] ."</td>
                    <td>" .$row["cover_buku"] ."</td>
                    <td>
                        <a href='update' type='button' class='btn btn-primary'>Update</a>
                        |
                        <a href='delete_buku.php'>Hapus</a>
                    </td>
                </tr>";

                $i++;
                }
                ?>
            </tbody>
        </table>
        </div>
</body>
</html>