<?php

class Mahasiswa {
    //properti
    public $nim;
    public $nama;
    public $prodi;


    //method
    public function showData()
    {
        echo "Nim Mahasiswa : ". $this->nim;
        echo "<br>";
        echo "Nama Mahasiswa : ". $this->nama;
        echo "<br>";
        echo "Prodi Mahasiswa : ". $this->prodi;
    }
}

$mhsBudi = new Mahasiswa(); //instansiasi objek
$mhsBudi->nim = 2022120129;
$mhsBudi->nama = "Budiawan";
$mhsBudi->prodi = "Informatika";
$mhsBudi->showData();

echo "<br>";

$mhsAnggi = new Mahasiswa();
$mhsAnggi->nim = 129387193;
$mhsAnggi->nama = "Anggi Mayang";
$mhsAnggi->prodi = "Sistem Informasi";
$mhsAnggi->showData();
