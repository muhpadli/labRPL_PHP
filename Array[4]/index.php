<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>membaca array dari file</title>
</head>

<body>
    <div class="container">
        <div class=" row col-md-8  text-start">
            <h3 class="pt-5 mb-3">Daftar faktur pembelian pelanggan</h3>
            <?php
            //membuka file faktur.txt dengan perintah file()
            //file() akan memecah setiap baris atau pembelian enjadi array
            $faktur = file('faktur.txt');

            //menghitung jumlah array atau pembelian
            $jml_pembelian = count($faktur);

            // jika $jml_pembelian == 0 maka pembelian tidak ada
            if ($jml_pembelian == 0) {
                echo "<p><b>Daftar pembeli tidak ada</b></p>";
            }
            ?>
            <!--membuat tabel untuk menampilkan faktur-->
            <table class="table table-bordered" cellpadding="2">
                <tr style="background-color: #cccccc;">
                    <th>Tanggal Beli</th>
                    <th>Tas</th>
                    <th>Total Rp.</th>
                    <th>Sepatu</th>
                    <th>Total Rp.</th>
                    <th>Buku</th>
                    <th>Total Rp.</th>
                    <th>Sub Total + diskon</th>
                </tr>
                <?php
                for ($index = 0; $index < $jml_pembelian; $index++) {
                    //memecahkan setiap bagian menjadi array
                    $bagian = explode(' -#- ', $faktur[$index]);

                    //merubah variabel dari tipe string menjadi integer dengan intval()
                    //agar angkanya saja yang dicetak

                    $bagian[1] = intval($bagian[1]); // x Tas
                    $bagian[3] = intval($bagian[3]); // x Sepatu
                    $bagian[5] = intval($bagian[5]); // x Buku
                    $bagian[7] = intval($bagian[7]); // x Subtotal

                    //cetak kelayar
                    echo '<tr>';
                    for ($jml_bagian = 0; $jml_bagian < 8; $jml_bagian++) {
                        echo '<td align = "right">' . $bagian[$jml_bagian] . '</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>