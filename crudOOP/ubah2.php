<?php
require 'programConnect.php';

class ubah2 extends koneksiDatabase
{
    function __construct($a, $b, $c, $d)
    {
        parent::__construct($a, $b, $c, $d);
    }

    function view($id, $konn)
    {
        $rows = [];
        $query = "SELECT * FROM tb_berita WHERE id_berita = $id";
        if ($sql = $konn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return $rows;
    }

    function update($data, $konn)
    {
        $query = "UPDATE `tb_berita` SET `tb_berita`.`judul_berita` = '$data[judul_berita]',`tb_berita`.`isi_berita` = '$data[isi_berita]' WHERE `tb_berita`.`id_berita` = '$data[id]'";

        if ($sql = $konn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}
?>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "crudoop";
$objUbah = new ubah2($host, $user, $pass, $db);

$objUbah->conn();
$konek = $objUbah->conn();
$id = $_REQUEST['id'];
$rows = $objUbah->view($id, $konek);


if (isset($_POST['submit'])) {
    if (isset($_POST['judul_berita']) && isset($_POST['isi_berita'])) {
        if (!empty($_POST['judul_berita']) && isset($_POST['isi_berita'])) {
            $data['id'] = $id;
            $data['judul_berita'] = $_POST['judul_berita'];
            $data['isi_berita'] = $_POST['isi_berita'];

            $updateData = $objUbah->update($data, $konek);

            // var_dump($updateData);
            // die();

            if ($updateData == true) {
                echo "
                <SCRIPt>alert('Data berhasil diupdate');
                document.location.href = 'read.php';
                </SCRIPt>
                ";
            } else {
                echo "<SCRIPt>alert('Data gagal diupdate');
                document.location.href = 'read.php';
                </SCRIPt>
                ";
            }
        } else {
            echo "<SCRIPt>alert('Data gagal diupdate');
                document.location.href = 'read.php';
                </SCRIPt>
                ";
        }
    }
}

// if (isset($_GET['id']) && $_GET['id'] > 0) {
//     $id = $_GET['id'];
//     // $result = mysqli_query($konek, "SELECT * FROM tb_berita where id =" . $_GET['id']);

//     $row = $objUbah->view($id, $konek);

//     $id_berita = $row['id_berita'];
//     $judul_berita = $row['judul_berita'];
//     $isi_berita = $row['isi_berita'];
//     $id_user = $row['id_user'];
//     var_dump($id_berita, $judul_berita, $isi_berita, $id_user);
//     die();
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Edit Berita</title>
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
    <div class="content">
        <div class="container">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="heading">
                                <h1>Edit Berita Anda di Sini</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <form method="post" action="">
                                <?php foreach ($rows as $row) : ?>
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-8">
                                            <div class="form-input">
                                                <div class="mb-3">
                                                    <label for="judulBerita" class="form-label">Judul Berita:</label>
                                                    <input type="text" name="judul_berita" class="form-control" id="judul_berita" value="<?php echo $row["judul_berita"]; ?>">
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
                                                    <input type="textarea" class="form-control" name="isi_berita" id="isi_berita" style="height: 500px" value="<?php echo $row['isi_berita'];
                                                                                                                                                                ?>"></input>
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
                                <?php endforeach; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>