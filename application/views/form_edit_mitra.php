<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mitra | Mitra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
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
        .card-header{
            background-color:	#4cbb93;
            color: white;
        }
        .btn{
            background-color:	#4cbb93;
            color: white;
        }
        .card-header{
            font-size:large; 
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" id = "navbarr">
        <div class="container">
            <a class="navbar-brand" href="#">MedGency</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('mitra') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="http://localhost/Medgency/index.php/mitra/showDoctor">Show Dokter</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= site_url('mitra/editmitra') ?>">Edit Mitra</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= site_url('mitra/logout') ?>">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Data Mitra</strong>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                </div>
                                <div class="col-4">
                                    <img class ="mx-auto d-block"src="data:image/png;base64,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" alt="" style="width: 150px; height: 150   px;">
                                </div>
                            </div>
                        </div>
                        <form action="<?= site_url('mitra/edit_mitra') ?>" method="post">
                            <div class="form-group">
                                <label for="nama_dokter">Nama Mitra</label>
                                <input type="text" class="form-control" id="namamitra" name="namamitra" value="<?php echo $mitra['nama'] ?>">
                                <small class="form-text text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="namapasien">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $mitra['address'] ?>">
                                <small class="form-text text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Waktu</label>
                                <input type="text" class="form-control" id="waktu" name="waktu" value="<?php echo $mitra['waktu'] ?>">
                                <small class="form-text text-danger"></small>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-block">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>