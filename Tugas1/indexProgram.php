<?php
class rumah
{
    // Properties
    public $pemilik;
    public $warna;
    public $tipe;
    // Methods
    function set($pemilik, $warna, $tipe)
    {
        $this->pemilik = $pemilik;
        $this->warna = $warna;
        $this->tipe = $tipe;
    }
    function tampilData()
    {
        echo "Rumah bapak {$this->pemilik} berwarna {$this->warna} dengan tipe {$this->tipe}";
    }
    function statusRumah()
    {
        if ($this->tipe > 40) {
            $status = "Luas";
        } else {

            $status = "Minimalis";
        }
        echo $status;
    }
    function kisaranHarga()
    {
        if ($this->tipe >= 60) {
            $harga = 300000000;
        } else if ($this->tipe >= 40) {
            $harga = 200000000;
        } else {
            $harga = 100000000;
        }
        return $harga;
    }
}
//membuat objek
$inforumah = new rumah();

//setting properti
$inforumah->set('hehe', 'pink', "22");

//menampillkan data rumah
// $inforumah->tampilData();
// echo ", rumah ini termasuk dalam kategori ";
// $inforumah->statusRumah();
// echo " Kisaran harganya adalah ", $inforumah->kisaranHarga();

// echo "<br>";
// echo "============ DP ==========";
// echo "<br>";
// echo $inforumah->kisaranHarga() * 0.3;
