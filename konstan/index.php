<?php

class Alamat{
    const PROVINSI = "ACEH";

    function print()
    {
        echo self::PROVINSI;
    }

}

echo Alamat::PROVINSI;
echo "<br>";

$alamat = new Alamat();
$alamat->print();

class Rumus {
    const PHI = 3.14;
    const TOKEN = "29en2ru09r2u3nr38r832938";
    
    function cekClass()
    {
        echo "nama class ini adalah : ". __CLASS__;
        
        echo "<br>";

        echo "method yang digunakan : ". __FUNCTION__;
    }
}

echo "<br>";

//konstan tanpa pakai class
define('NAMA',"Mahendar");
echo NAMA;

echo "<br>";
define('DB_HOST','127.0.0.1');
echo "IP untuk Host adalah". DB_HOST . ' '. __LINE__; 

echo "<br>";

echo __FILE__;
echo __LINE__;

echo "<br>";
$cek = new Rumus();
$cek->cekClass();