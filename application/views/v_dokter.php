<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- MY CSS -->

    <style type="text/css">
        .badge {
            margin-left: 3px;
        }
        .navbar-brand,.nav-link{
          font-family: Montserrat;
          color: black !important;
          text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
          display: inline-block;
      }

      .navbar-brand{
          font-weight: bold;
          font-size: 25px;
      }

      .nav-link {
          margin-right: 25px;
      }

      .nav-link:hover::after {
          content: '';
          display: block;
          border-bottom: 3px solid #74b9ff;
          width: 50%;
          margin: auto;
          padding-bottom: 3px;
          margin-bottom: -8px;
      }
      body{
          margin-left: 10%;
          margin-right: 10%;
      }
    </style>

    <title>Home | Mitra</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" id = "navbarr">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url('mitra') ?>">MedGency</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('mitra') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= site_url('mitra/showDoctor') ?>">Show Dokter</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= site_url('mitra/logout') ?>">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="row mt-3">
        <div class="col md-6">
            <form action="<?= site_url('mitra/cariDoctor') ?>" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Dokter ... " name="keyword_dokter">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Dokter</h3>
            <div class="container">
            <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Dokter <strong>Tidak Bisa Dihapus</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Nama Dokter</th>
                        <th class="text-center" scope="col">Spesialis</th>
                        <th class="text-center" scope="col">Waktu</th>
                        <th class="text-center" scope="col">Hapus Dokter?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($dokter as $dok) : ?>
                        <td class="text-center"><?= $dok['nama']; ?></td>
                        <td class="text-center"><?= $dok['spesialis']; ?></td>
                        <td class="text-center"><?= $dok['waktu']; ?></td>
                        <td class="text-center">
                            <a href="<?= site_url(); ?>/mitra/hapusDokter/<?= $dok['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah Dokter akan di delete ?');" ?>Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="http://localhost/Medgency/index.php/mitra/tambahDokter" class="btn btn-primary">Tambah Dokter</a>
                </div>
            </div>

        </div>
    </div>
</div> 
<body>
