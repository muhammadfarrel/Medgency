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

    <title>Edit Doctor | Mitra</title>
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

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Edit Data Dokter
                </div>
                <div class="card-body">
                    <form action="<?= site_url('mitra/editt') ?>" method="post">
                    <input type="text" class="form-control" id="nama" name="id" value="<?php echo $mitra['id'] ?>" hidden>
                    <input type="text" class="form-control" id="nama" name="id_mitra" value="<?php echo $mitra['id_mitra'] ?>" hidden>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mitra['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nim">Waktu</label>
                            <input type="text" class="form-control" id="nim" name="waktu" value="<?php echo $mitra['waktu'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Spesialis</label>
                            <select class="form-control" id="jurusan" name="spesialis">
                                <option value="Paru-paru">Paru-Paru</option>
                                <option value="Jantung">Jantung</option>
                                <option value="Anak & Kandungan">Anak & Kandungan</option>
                                <option value="Gigi">Gigi</option>
                                <option value="Penyakit dalam">Penyakit dalam</option>
                                <option value="Gizi">Gizi</option>
                                <option value="Mata">Mata</option>
                                <option value="Kulit & Kelamin">Kulit & Kelamin</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 