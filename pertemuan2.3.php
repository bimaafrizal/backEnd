<?php
class Kendaraan
{
    public $nama;
    public $roda;

    function __construct($a, $b)
    {
        $this->nama = $a;
        $this->rodsa = $b;
    }

    function get_data_array()
    {
        $data = array($this->nama, $this->roda);
        return $data;
    }
}

class Kereta extends Kendaraan
{
    public $gerbong;

    function __construct($a, $b, $c)
    {
        parent::__construct($a, $b);
        $this->gerbong = $c;
    }
    function get_gerbong()
    {
        return $this->gerbong;
    }
}

$kereta_api = new Kereta("KA. Senja", "100", "20");
$data_array = $kereta_api->get_data_array();
echo $data_array[0];
echo "<br>";
echo $data_array[1];
echo "<br>";
echo $kereta_api->get_gerbong();
