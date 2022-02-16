<?php

//fungsi-fungsi matematika pada php

//fungsi absolut =>>> abs()
$nilai_a = 45;
$nilai_b = 65;

$selisih = abs($nilai_a - $nilai_b);
echo "Selisih : $selisih<br/>";

//fungsi Pi =>>> pi()
echo "nilai pi : " . pi() . "<br/>";

//fungsi pangkat =>>> pow(nilai basis, nilai eksponen)
echo "3 pangkat 5 : " . pow(3, 5) . "<br/>";
echo "4 pangkat 2 : " . pow(4, 2) . "<br/>";

//fungsi akar bilangan =>>> sqrt()
echo "akar dari 49 adalah " . sqrt(49) . "<br/>";
echo "akar dari 81 adalah " . sqrt(81) . "<br/>";

//fungsi angka acak =>>> rand (nilai min, nilai max)
echo  rand(3, 9) . "<br/>";
echo  rand(9, 16) . "<br/>";

//konnversi derajat ke radian =>>> deg2rad()
echo deg2rad(120) . "<br/>";
echo deg2rad(180) . "<br/>";

//membulatkan bilangan  desimal =>>> round()
echo round(9.453454) . "<br/>";
echo round(pi(), 2) . "<br/>";

//pembulatan keatas =>>> ceil()
echo ceil(9.4534) . "<br/>";
echo ceil(9.8754) . "<br/>";

//pembulatan kebawah =>>> floor()
echo floor(6.3453) . "<br/>";
echo floor(6.9878) . "<br/>";
