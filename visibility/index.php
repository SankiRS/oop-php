<?php
class Buah{
    public $warna = "Merah";
    protected $nama = "mangga";
    private $rasa = "Manis";

    protected function jelaskan()
    {
        echo "Nama Buahnya : ". $this->nama . " Warnanya adalah : ". $this->warna;
    }

    protected function ambilPaksaRasa(){
        echo $this->rasa;
    }
}

class BuahTropis extends Buah
{
    public function tampilJelaskan()
    {
        echo $this->warna;
        echo $this->nama;
        echo $this->ambilPaksaRasa();
    }

    public function jelas()
    {
        echo $this->jelaskan();
    }
}

$mangga = new BuahTropis();
$mangga->tampilJelaskan();
echo "<br>";
$mangga->jelas();

