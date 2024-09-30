<?php

    require_once('data.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Navbarse Start  -->
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">SI Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>

                    <a class="nav-link active" aria-current="page" href="#">Lihat Data</a>

                    <a class="nav-link active" aria-current="page" href="#">Tambahkan Data </a>
                   
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->



    <!-- Header Start -->


    <!-- Header End -->




    <!-- Content Start -->
    <div class="container mt-5">

        <div class="row">

            <div class="col-12 text-center">
                <p class="display-1 fw-bolder">Data Mahasiswa</p>
            </div>

            <div class="col-12">

                <table class="table table-hover table-bordered">
                    <tr class="table-dark text-center">
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                  <?php $i = 0; foreach($mahasiswa as $m) : ?>
                    <tr class="text-center">
                        <td><?= ++$i?></td>
                        <td> <?= $m['nim']?></td>
                        <td><?= $m['nama']?></td>
                        <td> <?= $m['alamat'] ?> </td>
                        <td>
                            <a href="" class="btn btn-primary">Ubah</a>
                            <a href="detail.php?id=<?= $m['id']?>" class="btn btn-warning">Detail</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </table>

            </div>


        </div>

    </div>

    <!-- Content End -->







    <!-- JS Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>