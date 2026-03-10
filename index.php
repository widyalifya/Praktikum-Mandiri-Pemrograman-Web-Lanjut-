<?php
include "Mahasiswa.php";


$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika'); 



$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A12.2000.00001', 'Junior', 'Sistem Informasi');

echo "<br><br>";

$mahasiswaBaru = new Mahasiswa();
$mahasiswaBaru->setData('A11.2023.12345', 'Budi', 'Teknik Informatika');

echo "<b>Data Mahasiswa:</b><br><br>";
$mahasiswaTI->tampilkanData();
$mahasiswaSI->tampilkanData();
?>