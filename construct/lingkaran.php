<?php

class Linkaran
{
    public $pi = 3.14;
    public $jariJari;

    public function __construct($jari = 10)
    {
        $this->jariJari = $jari;
    }

    public function input()
    {
        echo "Nilai Jari - Jari yang diinput adalah ". $this->jariJari;
    }

    public function hasil(){
        return $this->pi * $this->jariJari * $this->jariJari;
    }

    public function __destruct(){
        echo "Yey anda berhasil";
    }
}


$bola = new Linkaran(20);
echo $bola->input();
echo "<br>";
echo "luas dari bola adalah : ". $bola->hasil();