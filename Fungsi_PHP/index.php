<?php
//Program fungsi pada php

//fungsi tanpa parameter
function nama_mahasiswa()
{
    $list_mahasiswa = array("Gibran", "Ramadhan", "Asraf", "Deni Mursidin", "Chaerul");
    foreach ($list_mahasiswa as $mahasiswa) {
        echo "$mahasiswa<br/>";
    }
}
nama_mahasiswa();
echo "<br/>";

//fungsi dengan parameter
function costumer_tokoonline($nama)
{
    echo "hai $nama! selamat datang ditoko online kami.<br/>";
    echo "Ada yang bisa kami bantu?";
}
costumer_tokoonline("Deni Mursidin");
echo "<br/><br/>";

function jumlah_pelanggan($x)
{
    if ($x > 10) {
        echo "Selamat anda mendapatkan bonus sebesar 1 juta rupiah<br>";
    }
}

jumlah_pelanggan(123);
echo "<br/>";

//fungsi dengan parameter terbatas
function identitas_mahasiswa(string $nama, int $usia, string $alamat)
{
    echo "Nama : $nama<br/>";
    echo "NIM : $usia<br/>";
    echo "Alamat : $alamat<br/>";
}
identitas_mahasiswa("Muh. Padli", 19, "Sirindu");
echo "<br/>";
