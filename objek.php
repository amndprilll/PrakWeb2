<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objek</title>
</head>
<body>
    <h2>Kelas Sekolah Dasar Negri Bambu Kuning 03</h2>
    <hr>
</body>
</html>

<?php
// buat kelas wlee
class Kelas {
    // properti
public $nama_kelas ="kosong";
public $kelas = "kosong";
public $nama_guru = "kosong";
public $murid = "kosong";
public $pelajaran = "kosong";
    // methode
public function getKelas ($nama_kelas, $kelas, $nama_guru, $murid, $pelajaran){
    echo "Kelas ini memiliki nama yaitu " . $nama_kelas;
    echo "<br>";
    echo "Kelas ini diisi oleh murid " . $kelas;
    echo "<br>";
    echo "Guru yang akan mengajar adalah " . $nama_guru;
    echo "<br>";
    echo "Jumlah murid yang akan diajar ada " . $murid;
    echo "<br>";
    echo "Pelajaran yang akan dimulai adalah pelajaran " . $pelajaran;
}
}

// objek pertama
$kelas1 = new Kelas();
$kelas1->getKelas ("Kelas Smart","Kelas 5","Ustazah Ananda","20 murid", "Pendidikan Agama Islam");
echo "</br>";
echo "</br>";  
var_dump($kelas1);

echo "</br>";
echo "<hr>";

// objek kedua
$kelas2 = new Kelas();
$kelas2->getKelas ("Kelas Wise ","Kelas 4","Bapak Saiful Anwar","15 murid", "Pendidikan Olahraga");
echo "</br>";
echo "</br>";
var_dump($kelas2);  

echo "</br>";
echo "<hr>";

// objek ketiga
$kelas3 = new Kelas();
$kelas3->getKelas ("Kelas Diligent ","Kelas 3","Ibu Syarifani S.Pd","23 murid", "Bahasa Indonesia");
echo "</br>";
echo "</br>";
var_dump($kelas2);  
