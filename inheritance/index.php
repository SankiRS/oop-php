<?php

class Mobil{
    public $nama, $merk, $warna, $maxSpeed, $jmlPenumpang;

    public function __construct($nama = "unknown"){
        $this->nama = $nama;
    }

    final public function tambahKecepatan()
    {
        return "Kecepatan ditambah";
    }
}

class MobilSport extends Mobil{
    public $turbo = false;
    public $merk; //overriding properti parent

    public function __construct($nama = "Tidak diketahui"){ //overriding $nama pada construct
        $this->nama = $nama;
    }

    public function tambahKecepatanMax() //overriding method parent
    {
        return "Kecepatan ditambah sangat signifikan";
    }

    public function jalankanTurbo(){
        $this->turbo = true;
        return "Turbo dijalankan!";
    }
}

$lambo = new MobilSport();
// $lambo->nama = "Lamborgini";
echo "<br>";
echo "Merk Mobil : ". $lambo->nama;
echo "<br>";
echo $lambo->tambahKecepatanMax();
echo "<br>";
echo $lambo->jalankanTurbo();