<?php
// tipe data

$number = 1;        // integer (bilangan bulat)
$desimal = 10.4;    // float (bilangan desimal)
$kalimat = "Mari belajar pemrograman"; // string
$bool = true;       // boolean (nilai : true, false)
$nilaiKosong = null; //null

echo $kalimat;

$nama_mahasiswa = "budi";

// array

// 1. array numerik
$number = [1,2,20,32,3.14,"nilai", true];
$mahasiswa = ["agus","budi","cindi","dodi"];

echo "<br>";
echo $mahasiswa[1];

$fikom = ["Sistem Informasi","Informatika"];

echo "<br>";
echo $mahasiswa[3]. " di prodi : " .$fikom[1];

// 2. array multidimensi
$sayurBuah = [
    ["Bayam","kangkung","Kol"],
    ["Apel","Jeruk","Jambu"]
];

echo "<br>";
echo "Belanjaan Sayur : ". $sayurBuah[0][2];
echo "<br>";
echo "Belanja buah : " . $sayurBuah[1][0];

// 3. array asosiatif
$dataMk = [
    "nama" => "algoritma",
    "deskripsi" => "algoritma untuk prodi informatika"  
];

echo "<br>";
echo $dataMk["nama"];
echo "<br>";
echo $dataMk["deskripsi"];

// konstanta
define("GRETTING","Selamat datang di web kami");
echo "<br>";
echo GRETTING;

// operator aritmatika
$a = 10;
$b = 12;
echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;

// operator assignment
echo $a += $b; // a = a + b
echo $a -= $b; // a = a - b
echo $a *= $b; // a = a * b
echo $a /= $b; // a = a / b
echo $a %= $b; // a = a % b

// operator pembanding
echo "<br>";
echo $a == $b;
echo $a === $b;
echo $a != $b;
echo $a !== $b;
echo $a > $b;
echo $a >= $b;
echo $a < $b;
echo $a <= $b;

// operator increment dan decrement
echo $a++; // post increment
echo ++$a; // pre increment
echo $a--; // post decrement
echo --$a; // pre decrement


// operator logika
$x = false;
$y = true;
echo "<br>";
echo $x and $y;
echo $x or $y;
echo $x xor $y;
echo $x && $y;
echo $x || $y;
echo !$x;

// struktur kendali
// 1. if else statement
if($y && $x){
    echo "benar";
}elseif($x && $y){
    echo "Salah";
}else{
    echo "keluar dari logika";
}

$uts = 80;
if($uts > 80){
    echo "lulus";
}else{
    echo "tidak lulus";
}
echo "<br>";

//2. foorloop statement
for($nilai = 0; $nilai <= 10; $nilai++){
    echo "angka adalah ". $nilai . "<br>" ;
}

// loop array numerik
for ($nama = 0; $nama < count($mahasiswa); $nama++){
    echo "Nama mahasisw ke - " .$nama . "adalah : ". $mahasiswa[$nama];
    echo "<br>";
}

// while loop
// switch case
// function
?>