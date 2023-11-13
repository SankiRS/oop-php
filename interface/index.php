<?php

interface Buah{
    public function makan();
    public function setWarna($warna);
}

interface Benda {
    public function setUkuran();
}

Class Apel implements Buah, Benda{
    protected $warna;

    public function makan(){
        echo "makan sebuah apel";
    }

    public function setWarna($warna){
        $this->warna = $warna;
        echo "wana apel ". $warna;
    }

    public function setUkuran(){
        
    }
}

class Jeruk implements Buah{
    public function makan(){

    }

    public function setWarna($warna = null){

    }
}

$apelHijau = new Apel();
echo $apelHijau->makan();
echo "<br>";
echo $apelHijau->setWarna('Hijau');