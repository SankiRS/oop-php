<?php

abstract class komputer {
   // isi dari class komputer

   abstract public function lihat_spec($merk); 
   abstract public function lihat_processor();
   abstract public function lihat_harddisk();
   abstract public function lihat_pemilik();

    public function hidupkan_komputer(){
     echo "Hidupkan Komputer";
   }
}

class laptop extends komputer{
    public function lihat_spec($merk){
     return "Lihat Spec Laptop...";
   }

   public function beli_laptop(){
     return "Beli Laptop...";
   }
}

