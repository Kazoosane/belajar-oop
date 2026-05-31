<?php

// CONSTRUCTOR

class Mobil
{
    public $merk;
    public function __construct($merk) {
        $this->merk = $merk;
    }
}
$mobil1 = new Mobil("Toyota");
echo $mobil1->merk;
