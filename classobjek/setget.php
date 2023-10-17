<?php

class Buah
{
    public $nama;
    public $warna;

    public function setNama($namabuah) //setter
    {
        $this->nama = $namabuah;
    }

    public function getNama() //getter
    {
        echo "Nama Buah nya adalah : " . $this->nama;
        echo "<br>";
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function getWarna()
    {
        echo "Warna buah adalah : " . $this->warna;
        echo "<br>";
    }
}

$mangga = new Buah();
$mangga->setNama("Mangga");
$mangga->setWarna('Hijau');
$mangga->getNama();
$mangga->getWarna();

$ceri = new Buah();
$ceri->setNama("Cerry");
$ceri->setWarna("Merah");
$ceri->getNama();
$ceri->getWarna();
