<?php
require 'programConnect.php';

class hapus extends koneksiDatabase
{

    function __construct($a, $b, $c, $d)
    {
        parent::__construct($a, $b, $c, $d);
    }

    function hapus($id, $conn)
    {
        $query  = "DELETE FROM `tb_berita` WHERE `id_berita` = '$id' ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}



?>

<?php
$id = $_GET["id"];

$host = "localhost";
$user = "root";
$pass = "";
$db = "crudoop";

$obj_hapus = new hapus($host, $user, $pass, $db);
$obj_hapus->conn();

$connHapus = $obj_hapus->conn();

$obj_hapus->hapus($id, $connHapus);
$fungsiHapus = $obj_hapus->hapus($id, $connHapus);

// var_dump($id);
// die();
?>
<?php
if ($fungsiHapus != true) {
    echo "
        <SCRIPt>
            alert('Data berhasil dihapus');
            document.location.href = 'read.php';
        </SCRIPt>
        ";
} else {
    echo "
        <SCRIPt>
            alert('Data gagal dihapus');
            document.location.href = 'read.php';
        </SCRIPt>
        ";
}
?>