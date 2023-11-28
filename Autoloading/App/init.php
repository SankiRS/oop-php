<?php 

// require_once 'Penjualan/Komik.php';
// require_once 'Penjualan/Game.php';

spl_autoload_register(function($class){
    require_once __DIR__ . '/Penjualan/'. $class . '.php';
});


spl_autoload_register(function($class){
    require_once __DIR__ . '/Pembelian/'. $class . '.php';
});


