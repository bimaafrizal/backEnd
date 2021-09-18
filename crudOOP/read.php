<?php
require 'programConnect.php';

class read extends koneksiDatabase
{

    private $querys;
    function __construct($a, $b, $c, $d, $e)
    {
        parent::__construct($a, $b, $c, $d);
        $this->querys = $e;
    }

    function view($koneksi)
    {
        $tampil = $this->querys;
        $result = mysqli_query($koneksi, $tampil);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }
}

$host = "localhost";
$user = "root";
$pass = "";
$db = "crudoop";
$toTables = "SELECT * FROM tb_berita";

$tampilData = new read($host, $user, $pass, $db, $toTables);
$tampilData->conn();

$koneksi = $tampilData->conn();


$rows = $tampilData->view($koneksi);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleRead.css">
    <title>Baca Berita</title>
</head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-light">
                <div class="container">
                    <a href="https://www.linkedin.com/in/bima-afrizal-malna-12033b145/" class="navbar-brand text-light">Bima Afrizal Malna/V3420018/TI-A</a>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="table">
            <h1 class="heading">Tampil Data</h1>
            <hr style="height: 10px;color: black; background-color: black;">
            <a class="btn btn-success btn_up" href="index.php" role="button">Home</a>
            <a class="btn btn-primary btn_up" href="indexTambahBerita.php" role="button">Tambah</a>
            <table class="table table-striped table-hover" border="1" cellpadding=10 cellspacing=0>
                <thead>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Isi Berita</th>
                    <th>User</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($rows as $row) : ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['judul_berita'] ?></td>
                            <td><?php echo $row['isi_berita'] ?></td>
                            <td><?php echo $row['id_user'] ?></td>
                            <td>
                                <a class="btn btn-warning" href="ubah2.php?id= <?php echo $row["id_berita"] ?>">Ubah</a>
                                <a class="btn btn-danger" href="delete.php?id= <?php echo $row["id_berita"] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data? ')">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>