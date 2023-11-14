<?php 

Class Buah{
    protected $rasa;

    public function kupasKulit(){
        echo "kupas kulit sebelum makan";
    }

    public function setRasa($rasa){
        $this->rasa = $rasa;
    }
}