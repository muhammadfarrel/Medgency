<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">

    <!-- style css nya -->
    <style type="text/css">
      /* navbar start*/
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
      .navbar{
        color: black;
      }
      /* navbar end */

    </style>

    <title>Medgency!</title>
  </head>
  <body>

      <!-- ini navbar -->
      <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">MedGency</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('user/home') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= site_url('user/liatprofile') ?>">Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= site_url('user/riwayat') ?>">Riwayat</a>
                </li>
                <li class="nav-item">
                <a class="nav-link"  href="http://localhost/Medgency/index.php/user/getBooking">Booking Anda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= site_url('user/article') ?>">Article</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= site_url('user/aboutUs') ?>">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= site_url('user/logout') ?>">Logout</a>
                </li>
            </ul>
            </div>
        </div>
      </nav>
      
      <!-- akhir navbar -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>