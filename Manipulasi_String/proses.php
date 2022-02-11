<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Manipulasi String</title>
</head>

<body>
    <div class="container">
        <?php
        //membuat variabel data yang dikirim
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $pesan = $_POST["pesan"];

        //menghilangkan spasi awal dan akhir menggunakan fungsi trim()
        $nama = trim($nama);
        $email = trim($email);
        $pesan = trim($pesan);
        //membuat variabel sebagai parameter  fungsi mail() saat email mau dikirim
        $subject = "Kritik dan Saran dari Konsumen";
        $emailku = 'sinarmaju@gmail.com';
        $isi_email = "Nama Konsumen : $nama
                      \nEmail Konsumen : $email
                      \nPesan dan Kritik Konsumen : $pesan";
        $header = "from : Minimarket@online.com";

        //mengirim pesan dengan fungsi mail()
        mail($emailku, $subject, $isi_email, $header);
        //outputnya nanti tidak telihat karena kita tidak memiliki program mail server
        ?>
        <h3>Pesan Terkirim</h3>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>