<?php

//menampilkan tanggal pada php
// format menampilkan nama hari!!!
// l =>>> menampilkan nama hari dalam bentuk huruf.
// N =>>> menampilkan nama hari dalam bentuk angka dari 1(senin) - 7(minggu).
// D =>>> menampilkan nama hari dalam bentuk huruf tetapi dalam bentuk 3 digit.

// format menampilkan tanggal!!!
// d =>>> menampilkan tanggal dalam bentuk angka dua digit yaitu dari 01 -31.
// j =>>> menampilkan tanggal dalam bentuk angka dari 1-31.

// format menampilkan nama bulan!!!
// n =>>> menampilkan nama bulan dalam bentuk angka dari 1-12.
// M =>>> menampilkan bulan sekarang dalam bentuk huruf tiga digit huruf pertama.
// m =>>> menampilkan bulan sekarang dalam bentuk angka 01-12.

// format menampilkan tahun!!!
// Y =>>> menampilkan tahun dalam bentuk angka 4 digit.
// y =>>> menampilkan tahun dalam bentuk angka yaitu 2 digit angka terakhir tahun.

// format menampilkan jam!!!
// H =>>> menampilkan jamm dengan format 24 jam 01-24. 
// G =>>> menampilkan jamm dengan format 24 jam 1-24. 

// format menampilkan menit!!!
// i =>> menampilkan menit dengan 2 digit dari 00 s.d 59.

// format menampilkan detik!!!
// s =>> menampilkan detik dengan 2 digit dari 00 s.d 59.


// format penulisan fungsi =>>> date(format, timestamp);
echo date('N, d-M-Y');
echo "<br/>";
echo date('l, n-m-Y');
echo "<br/>";
echo date('Y-m-d');
echo "<br/>";
echo date('d-m-Y H:i:s');
echo "<br/>";

//timezone 
//date_default_timezone_set() =>>> digunakan untuk mengubah zona waktu.
//zona waktu timestamp menggunakan waktu GMT + 0
//sedangkan WIB menggunakan waktu GMT + 7
date_default_timezone_set('Asia/Jakarta');
echo 'WIB : ' . date('d-m-Y H:i:s');
echo "<br/>";
date_default_timezone_set('Asia/Makassar');
echo 'WITA : ' . date('d-m-Y H:i:s');
date_default_timezone_set('Asia/Papua');
echo 'WIT : ' . date('d-m-Y H:i:s');
