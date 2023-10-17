<?php

class Buah
{
    public $nama;
    public $warna;

    public function setData($dataNama=null, $dataWarna=null)
    {
        $this->nama = $dataNama;
        $this->warna = $dataWarna;
    }

    public function getData()
    {
        echo "Nama Buah ini adalah : ". $this->nama;
        echo "<br>";
        echo "Warna buah adalah : ". $this->warna;
    }

}

$anggur = new Buah();
$anggur->setData("Anggur","Unggu");
$anggur->getData();
