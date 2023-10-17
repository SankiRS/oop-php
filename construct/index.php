<?php

class Mobil{
    public $nama;
    public $warna;

    public function __construct($nama = "unknown", $warna="white")
    {
        $this->nama = $nama;
        $this->warna = $warna;
        echo "construct paling pertama dijalankan";
        echo "<br>";
    }

    public function tampilkanInfo()
    {
        return "Mobil ini bernama $this->nama dan berwarna $this->warna";
    }

    public function __destruct()
    {
        echo "<br>";
        echo "Memory di aplikasi anda sudah di hapus";
    }
}

$mobil1 = new Mobil("BWM","Biru");
echo $mobil1->tampilkanInfo();
echo "<br>";

$mobil2 = new Mobil("Ferari","Merah");
echo $mobil2->tampilkanInfo();

?>