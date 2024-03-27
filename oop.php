<?php
// buat kelas wlee
class Rumah {
    // properti
public $nama_pemilik ="kosong";
public $warna_rumah = "kosong";
public $merk_tv = "kosong";
    // methode
public function getRumah ($nama_pemilik, $warna_rumah, $merk_tv){
    echo "Rumah ini milik " . $nama_pemilik;
    echo "<br>";
    echo "Warna rumah ini adalah " . $warna_rumah;
    echo "<br>";
    echo "Merk TV nya " . $merk_tv;
}
}

// objek rumah 1
$rumah1 = new Rumah();
$rumah1->getRumah ("Mbak Nanda","Coksu","Samsung");
echo "</br>";
echo "</br>";  
var_dump($rumah1);

echo "</br>";
echo "</br>";
echo "<hr>";

// objek rumah 2
$rumah2 = new Rumah();
$rumah2->getRumah ("Mbak Fani","Biru","Nokia");
echo "</br>";
echo "</br>";
var_dump($rumah2);  