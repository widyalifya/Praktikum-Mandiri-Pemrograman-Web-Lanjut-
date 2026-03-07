<?php 
include "Mahasiswa.php"; //mengkoneksikan
include "Matakuliah.php";//mengkoneksikan

$mahasiswa_1 = new Mahasiswa();
$makul_1 = new Matakuliah();
$makul_2 = new Matakuliah();

$makul_1->setData("A11.12345", "Pemograman Berbasis Web");
$makul_2->setData("A11.12346", "Pemograman Berbasis Web Lanjut");

$mahasiswa_1->setData("A11.2023.12345", "Aprilyani Nur Safitri", [$makul_1, $makul_2]);

echo "<pre>";
print_r($mahasiswa_1);
echo "</pre>";


?>