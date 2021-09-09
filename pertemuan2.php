<?php

class Fruit
{
    var $name;
    var $warna;

    function __construct($name, $warna)
    {
        $this->name = $name;
        $this->warna = $warna;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_warna()
    {
        return $this->warna;
    }
}

$apple = new Fruit("Apel", "Biru");
echo $apple->get_name();
echo "<br>";
echo $apple->get_warna();
