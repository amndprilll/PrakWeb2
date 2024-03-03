<?php
// ambil value yang diinput user dan simpan kedala variabel//
$proses = $_POST['Proses'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$pratikum = $_POST['pratikum'];
$rata_rata =($uts+$uas+$pratikum)/3;
$keterangan = keterangan($rata_rata);
$grade = grade($rata_rata);

function keterangan ($rata_rata){
    if ($rata_rata >= 55 && $rata_rata <=100){
        return 'Anda Lulus';
    }else {
        return 'Anda Tidak Lulus';
    
    }
}

function grade($rata_rata){
    if ($rata_rata >= 85 && $rata_rata <=100) {
        return "A (Sangat baik)";
    } elseif ($rata_rata >= 70 && $rata_rata <=84) {
        return "B (baik)";
    } elseif ($rata_rata >= 56 && $rata_rata <=69) {
        return "C (Cukup)";
    }  elseif ($rata_rata >= 36 && $rata_rata <=55) {
        return "D (Kurang)";
    } elseif ($rata_rata >= 0 && $rata_rata <=35) {
        return "E (Sangat Kurang)";
    }else{
        return "I (Tidak Nilai)";
    }
    }

//manggil variabel yang memiliki value kolom,tampilkan menggunakan echo//
echo "Proses : $proses";
echo "<br>Nama Lengkap : $nama";
echo "<br>Mata Kuliah :  $matkul";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $uas";
echo "<br>Pratikum : $pratikum";
echo "<br>Rata-rata : $rata_rata";
echo "<br>Keterangan : $keterangan";
echo "<br>Grade : $grade";

?>