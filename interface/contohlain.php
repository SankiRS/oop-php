<?php

interface KendaraanInterface{
    public function get_bahan_bakar();
}

abstract class Kendaraan{
    private $jenis;

    public function set_bahan_bakar($jenis){
        $this->jenis = $jenis;

    }

    public function get_bahan_bakar(){
        return $this->jenis;
    }
}

class Bus extends Kendaraan implements KendaraanInterface{}

class Pesawat extends Kendaraan implements KendaraanInterface{}

class Kapal extends Kendaraan implements KendaraanInterface{}

$busTKR = new Bus();
$busTKR->set_bahan_bakar('Solar');
echo $busTKR->get_bahan_bakar();

