<?php

$mahasiswas =
[["Amanda","SI","2"],
["Aul","TI","3"],
["Ananda","BD","2"]];

foreach ($mahasiswas as $mahasiswa) {
    echo "Nama : " .$mahasiswa[0] . "<br>";
    echo "Jurusan : " .$mahasiswa[1] . "<br>";
    echo "Semester " .$mahasiswa[2] . "<br>";
    echo "<br>";
}
