<?php
include "Mahasiswa.php";


$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika'); 
print_r($mahasiswaTI->getData());


$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A12.2000.00001', 'Junior', 'Sistem Informasi');
print_r($mahasiswaSI->getData());
echo "<br><br>";


$mahasiswaBaru = new Mahasiswa();
$mahasiswaBaru->setData('A11.2023.12345', 'Budi', 'Teknik Informatika');
print_r($mahasiswaBaru->getData());
echo "<hr>";


echo "<b>Data Mahasiswa:</b><br><br>";
$mahasiswaTI->tampilkanData();
$mahasiswaSI->tampilkanData();
?>