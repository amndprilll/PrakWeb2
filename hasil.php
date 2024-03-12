<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Registrasi </title>
</head>
<body style="background-color:#C0C0C0;">
</body>
</html>
<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skill = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

$nilai =0;
foreach ($skill as $data) {
    switch ($data) {
        case 'html':
            $nilai += 10;
            break;
        case 'css':
            $nilai += 10;
            break;
        case 'js':
            $nilai += 20;
            break;
        case 'red':
            $nilai += 20;
            break;
        case 'php':
            $nilai += 30;
            break;
        case 'java':
            $nilai += 30;
            break;
        case 'python':
            $nilai += 50;
            break;
        
        default:
            break;
    }
}
///tampilkan value ke dalam web broser
echo "<h4>Informasi Yang dikirim : </h4>";
echo "NIM : $nim";
echo "<p>Nama : $nama";
echo "<p>Jenis Kelamin : $jk";
echo "<p>Program Studi : $prodi";
echo "<p>Skill : ";
foreach ($skill as $data) {
    echo $data . ",";
}
echo "<p>Domisili : $domisili";
echo "<p>Email : $email";
echo "<p>Skor Nilai : $nilai";

if ($nilai >= 0 && $nilai <= 40) {
    echo "<p>Keterampilan: Kurang.";
} elseif ($nilai > 40 && $nilai <= 60) {
    echo "<p>Keterampilan: Cukup.";
} elseif ($nilai > 60 && $nilai < 100) {
    echo "<p>Keterampilan: Baik.";
} elseif ($nilai >= 100 && $nilai <= 150) {
    echo "<p>Keterampilan: Sangat Baik.";
} else {
    echo "<p>Skor tidak valid.";
}

?>


