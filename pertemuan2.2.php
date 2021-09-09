<?php
class Kendaran
{
    public $nama;
    public $roda;
    // Konstrak dan parameter propertis yang dibutuhkan
    function __construct($a, $b)
    {
        $this->nama = $a;
        $this->roda = $b;
    }

    function get_data()
    {
        $data = array($this->nama, $this->roda);
        return $data;
    }
    // function get_nama()
    // {
    //     return $this->nama;
    // }
    // function get_roda()
    // {
    //     return $this->roda;
    // }
}
class Kereta extends Kendaran
{
    public $gerbong;
    function set_gerbong($x)
    {
        $this->gerbong = $x;
    }
    function get_gerbong()
    {
        return $this->gerbong;
    }
}
$kereta_api = new Kereta("KA. Senja", "Banyak"); // Pendefinisan obyek memanggil class Kereta
$kereta_api->set_gerbong("20");

$data_array = $kereta_api->get_data();
echo $data_array[0];
echo $data_array[1];

echo $kereta_api->get_gerbong();
