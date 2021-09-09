<?php
class penduduk
{
    public $nama;
    public $umur;
    public $pekerjaan;
    public $gaji;
    public $status;

    function set($name, $umur, $pekerjaan, $gaji, $status)
    {
        $this->nama = $name;
        $this->umur = $umur;
        $this->pekerjaan = $pekerjaan;
        $this->gaji = $gaji;
        $this->status = $status;
    }
    function tampilProfil()
    {
        echo "Nama saya adalah, {$this->nama} berumur {$this->umur} bekerja sebagai {$this->pekerjaan}";
    }
    function tampilGaji(){
        
    }
}
