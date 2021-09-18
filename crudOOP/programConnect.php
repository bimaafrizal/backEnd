<?php
class koneksiDatabase
{
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;


    function __construct($a, $b, $c, $d)
    {
        $this->dbhost = $a;
        $this->dbuser = $b;
        $this->dbpass = $c;
        $this->dbname = $d;
    }

    function conn()
    {
        $koneksi_db = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        return $koneksi_db;
    }

    function tambahBerita($koneksi, $judulBerita, $isiBerita, $idUser)
    {
        $tambahdata = "INSERT INTO `tb_berita`(`id_berita`, `judul_berita`, `isi_berita`, `id_user`) values ('','$judulBerita', '$isiBerita', '$idUser')";
        $proses_tambah = mysqli_query($koneksi, $tambahdata);
        // if ($proses_tambah) {
        //     echo "Data berhasil ditambahkan";
        // } else {
        //     echo "Data gagal ditambahkan";
        // }
        return $proses_tambah;
    }
}
