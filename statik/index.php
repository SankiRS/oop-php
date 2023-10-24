<?php

class Contoh {
    //static property
    public static $phi = 3.14;

    //static Method
    public function nilaiPhi()
    {
        //cara panggil property static pada class ini pakai self
        return self::$phi;
    }

    public static function cekPhi()
    {
        return self::$phi;
    }
}

class AnakContoh extends Contoh{
    public function phiPunyaPapa()
    {
        //cara panggil static property punya ortunya
        return parent::$phi;
    }

}

//cara panggil langsung static properti dan method di luar class
echo Contoh::$phi;
echo Contoh::cekPhi();