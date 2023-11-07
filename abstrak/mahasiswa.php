<?php

abstract Class Mahasiswa
{
    abstract public function nim($nim);
    abstract public function namaDepan($nama);
}

class Informatika extends Mahasiswa
{
    public $nama; 
    public $nim;

    public function nim($nim)
    {
        //jika nim diawali dengan anka 22 dari 22127398172938
        if(substr($this->nim, 2) == '22')
        {
            echo "angakatan 2022";
        }else{
            echo "bukan angkatan 2022";
        }
    }

    public function namaDepan($nama){

    }
}

class SistemInformasi extends Mahasiswa
{
    public $nomorInduk;
    public $nama;

    public function nim($nim){
        $this->nomorInduk = $nim;
    }

    public function namaDepan($nama){
        $this->nama = $nama;
    }

    public function cetakNama()
    {
        return "nama mahasiswa adalah :". $this->nama;
    }

    public function cetakNim()
    {
        return "Nimnya adalah :". $this->nomorInduk;
    }
}

$budiSI = new SistemInformasi();
$budiSI->namaDepan("Budiawan");
$budiSI->nim("1293871923");
echo $budiSI->cetakNama();
echo $budiSI->cetakNim();

