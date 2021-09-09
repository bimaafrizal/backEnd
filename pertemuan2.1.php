<?php 

class fruit {
    private $name;

    function __construct($n)
    {
        $this-> name = $n;
    }
    function getName() {
        return $this->name;
    }
}

$apple = new fruit("Apel");
echo $apple -> getName();
