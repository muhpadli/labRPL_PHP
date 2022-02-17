<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Gaji Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container pt-5 pb-5">
        <?php
        $nama = $_POST['nama'];
        $jml_jam_kerja = $_POST['jumlah_jam_kerja'];
        echo "NAMA : $nama <br/>";
        echo "Jumlah Jam Kerja : $jml_jam_kerja jam <br/>";
        if ($jml_jam_kerja > 48) {
            $jam_kerja_lembur = $jml_jam_kerja - 48;
            $jam_kerja_pokok = $jml_jam_kerja - $jam_kerja_lembur;
            $gaji_pokok = 2000 * $jam_kerja_pokok;
            $gaji_lembur = 3000 * $jam_kerja_lembur;
            $gaji_total = $gaji_pokok + $gaji_lembur;
        } else {
            $jam_kerja_lembur = "-";
            $jam_kerja_pokok = $jml_jam_kerja;
            $gaji_pokok = 2000 * $jam_kerja_pokok;
            $gaji_total = $gaji_pokok;
        }
        echo "Jam lembur =  $jam_kerja_lembur jam<br/>";
        echo "Gaji Total anda adalah Rp. $gaji_total<br/>";

        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>