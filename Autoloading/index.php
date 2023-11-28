<?php 

require_once 'App/init.php';

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100, 120);

echo $produk1->getInfo();

echo "<br>";

$game1 = new Game();
echo $game1->sayHello();