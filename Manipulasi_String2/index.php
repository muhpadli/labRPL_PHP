<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Manipulasi string2</title>
</head>

<body>
  <!-- As a heading -->
  <nav class="navbar navbar-light bg-light">
    <div class="container ">
      <span class="navbar-brand mb-0 h1">BELAJAR DASAR PHP</span>
    </div>
  </nav>

  <div class="container pt-5 pb-5">
    <div class="row">
      <div class="col-md-6">
        <h4><b>Mengubah format pada huruf string</b></h4>
        <?php
        //membuat variabel
        $subject =  "Kritik dan Pesan";
        echo "string variabel subject sebelum diubah";
        echo "<br/>";
        echo "$subject";
        echo "<br/>";
        echo "<br/>";
        echo "string variabel subject setelah menggunakan fungsi";
        echo "<br><br>";
        //menggunakan fungsi strtoupper()
        echo ">>>strtoupper()<br>";
        echo  strtoupper($subject);

        echo "<br><br>";
        //menggunakan fungsi strtolower()
        echo ">>>strtolower()<br>";
        echo  strtolower($subject);

        echo "<br><br>";
        //menggunakan fungsi ucfirst()
        echo ">>>ucfirst()<br>";
        echo  ucfirst($subject);

        echo "<br><br>";
        //menggunakan fungsi ucwords()
        echo ">>>ucwords()<br>";
        echo  ucwords($subject);

        echo "<br><br>";
        echo "<h5>Fungsi Addslashes() dan Striplashes() <br></h5>";
        $buah = "Mangga adalah buah 'kesukaan' saya";
        echo ">>> kalimat sebelum menggunakan fungsi<<< <br> $buah<br><br>";

        //menggunakan fungsi addslashes()
        echo ">>>kalimat setelah menggunakan fungsi Addslashes()<br>";
        echo addslashes($buah);

        echo "<br><br>";
        //menggunakan fungsi striplashes()
        echo ">>>kalimat setelah menggunakan fungsi Striplashes()<br>";
        echo stripslashes($buah);


        ?>
      </div>
      <div class="col-md-6">
        <?php
        echo "<h4><b>Format Angka:</b> number_string()</h4><br>";
        echo ">>> format fungsi number_format()<br>";
        echo "number_format (angka yang dirubah, jumlah angka dibelakang,
         string pemisah angka dibelakang, string pemisah angka ribuan).<br><br>";
        echo ">>> nilai angka sebelum menggunakan fungsi<br>";
        $angka = 1000000;
        echo "Rp. $angka";
        echo "<br><br>";
        echo ">>> nilai angka setelah menggunakan fungsi<br>";

        //menggunakan fungsi number_format()
        echo "RP." . number_format($angka, 2, '.', ',') . "<br>";
        echo "RP." . number_format($angka, 2, ',', '.') . "<br>";
        echo "RP." . number_format($angka, 1, '.', ',') . "<br>";
        echo "RP." . number_format($angka, 0, '', '.') . ",-<br><br>";

        echo "<h4><b>Mengganti string:</b> streplace()</h4><br>";
        echo ">>> format fungsi str_replace()<br>";
        echo "str_replace (string yang dicari, string pengganti, string sumber, jumlah yang dicari).<br><br>";
        echo ">>> string sebelum menggunakan fungsi<br>";
        $pesan = "Kritik dan Saran dari Konsumen";
        echo "$pesan";
        echo "<br><br>";
        echo ">>> string setelah menggunakan fungsi streplace()<br>";

        //menggunakan fungsi str_replace()
        echo str_replace("dan", "atau", $pesan);

        echo "<h4><b>Mencari string:</b> strstr()</h4><br>";
        echo ">>> format fungsi str_str()<br>";
        echo "str_replace (string asal, string yang dicari)<br><br>";
        echo ">>> string sebelum menggunakan fungsi<br>";
        echo "$pesan";
        echo "<br><br>";
        echo ">>> string setelah menggunakan fungsi strstr()<br>";

        //menggunakan fungsi strstr()
        if (strstr($pesan, "Kritik")) {
          echo "Kritik konsumen";
        }
        ?>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>