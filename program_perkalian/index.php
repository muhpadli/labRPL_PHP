<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAM PERKALIAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    <div class="container pt-5 pb-5">
        <form action="proses.php" method="post">
            <div class="row col-md-3">
                <h5>PROGRAM PERKALIAN</h5>
                <div class="mb-3">
                    <label for="exampleFormControlInputnama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInputnama" placeholder="siti nurbaya">
                </div>
                <div class="mb-3">
                    <label class="form-label">Perkalian berapa? </label>
                    <input type="number" name="perkalian" class="form-control" id="exampleFormControlInputperkalian">
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-md-1">lihat</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>