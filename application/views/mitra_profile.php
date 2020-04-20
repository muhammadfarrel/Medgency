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
                <a class="nav-link" >Profile</a>
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
                    Your Precious Profile
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('mitra/do_upload');?>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value = "<?= $mitra['nama']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nim">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value = "<?= $mitra['address']?>"disabled>
                        </div>
                        <div class="form-group">
			                    <label style="margin-bottom:12px;">Upload Image</label>
			                    <input type="file" class="btn form-control-file" name="img">
		                </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Foto</button>
                    <?php echo form_close(); ?>
                </div>
            </div>

        </div>
    </div>
</div> 
<body>
