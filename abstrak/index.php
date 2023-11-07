<?php

abstract class Mobil{
    public $merk;

    public function __construct($merk){
        $this->merk = $merk;

    }

    abstract public function jalan();
}

//tidak bisa jalan karena class Mobil adalah abstract class
// $bmw = new Mobil("bmw");
// echo $bmw->jalan();

// Harus dibuatkan class turunan dari class abstrak Mobil
class Audi extends Mobil
{
    //method jalan harus digunakan dari method abstrak class Mobil
    public function jalan(){
        return "jalan santai";
    }

    //ini method regular dari audi
    public function gerak()
    {
        echo "Melaju cepat ";
    }
}

//object
$audiA1 = new Audi("Audi");
echo $audiA1->jalan();