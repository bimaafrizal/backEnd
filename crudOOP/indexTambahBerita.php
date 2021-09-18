<?php

require 'programConnect.php';

$host = "localhost";
$user = "root";
$pass = "";
$db = "crudoop";

$tambahBerita = new koneksiDatabase($host, $user, $pass, $db);
$tambahBerita->conn();

$koneksi = $tambahBerita->conn();


if (isset($_POST['submit'])) {
    $judulBerita = $_POST['judulBerita'];
    $isiBerita = $_POST['isiBerita'];
    $idUser = $_POST['userID'];

    $queryTambahBerita = $tambahBerita->tambahBerita($koneksi, $judulBerita, $isiBerita, $idUser);

    if ($queryTambahBerita > 0) {
        echo "
        <SCRIPt>
            alert('Data berhasil ditambahkan');
            document.location.href = 'read.php';
        </SCRIPt>
        ";
    } else {
        echo "
        <SCRIPt>
            alert('Data gagal ditambahkan');
            document.location.href = 'indexTambahBerita.php';
        </SCRIPt>
        ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Berita</title>
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
    <div class="all">
        <div class="content">
            <div class="container">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="heading">
                                    <h1>Tambahakan Berita Anda di Sini</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form method="post" action="">
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-8">
                                            <div class="form-input">
                                                <div class="mb-3">
                                                    <label for="judulBerita" class="form-label">Judul Berita:</label>
                                                    <input type="text" name="judulBerita" class="form-control" id="judulBerita">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-8">
                                            <div class="form-floating">
                                                <div class="form-input">
                                                    <label for="floatingTextarea2">Isikan berita di sini</label>
                                                    <textarea class="form-control" placeholder="isikan berita disini" name="isiBerita" id="isiBerita" style="height: 500px"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-8">
                                            <div class="mb-3">
                                                <div class="form-input">
                                                    <label for="userID" class="form-label">User Id:</label>
                                                    <input type="text" name="userID" class="form-control" id="userID">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-8">
                                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        <div class="col-2">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>