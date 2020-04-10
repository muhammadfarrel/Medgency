<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">

    <!-- style css nya -->
    <style type="text/css">
      #carousel-container{
          margin-bottom: 50px;
      }

      /* carousel dekstop */
      @media (min-width: 992px) {
          #carousel-container{
              margin-top: 15px;
              margin-left: 50px;
              margin-right: 50px;
          }
      }

      .info-panel{
          box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
          border-radius: 12px;
          padding-left: 30px;
          padding-right: 30px;
          padding-top: 30px;
          padding-bottom: -100px;
      }

      .info-panel img{
          width: 100px;
          height: 100px;
          margin-right: 20px;
          margin-bottom: 20px;
      }

      .info-panel h4{
          font-size: 16px;
          font-weight: bold;
          text-transform: uppercase;
          margin-top: 5px;
      }

      .info-panel p{
          font-size: 13px;
          color: #ACACAC;
          margin-top: -5px;
          font-weight: 200;
      }

      .text-partners h1{
          margin-top: 70px;
          font-size: 50px;
      }

      .partners-space{
          margin-bottom: 50px;
      }

      .partners-space img{
          width: 450px;
          height: auto;
      }

      .partners-space h3{
          font-size: 52px;
          font-weight: 200;
          text-transform: uppercase;
          margin-top: 30px;
      }

      .partners-space p{
          font-size: 18px;
          color: #ACACAC;
          font-weight: 200;
      }

      .container-space{
          margin: 50px;
      }

      @media (min-width: 992px){
          .partners-space img{
              margin-left: 130px;
          }
      }
    </style>


    <title>Medgency!</title>
  </head>
  <body>

    <!-- carousel -->
    <div id="carousel-container" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="http://placehold.it/900x350" class="d-block w-100" alt="first-slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>This is MedGency</h5>
            <p>Medical service you can rely on</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="http://placehold.it/900x350" class="d-block w-100" alt="second-slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Corona terkini</h5>
            <p>corona sedang menggila karena patrick</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="http://placehold.it/900x350" class="d-block w-100" alt="third-slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Hai Kevin</h5>
            <p>- Spongebob</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>  

    <!-- container -->
    <div class="container">
      <!-- info-panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="<?php echo base_url()?>assets/img/time.svg" alt="time" class="float-left">
              <h4>24 Hours</h4>
              <p>buka terus bos</p>
            </div>
            <div class="col-lg">
              <img src="<?php echo base_url()?>assets/img/place.svg" alt="place" class="float-left">
              <h4>Everywhere</h4>
              <p>dimana aje mangg aku mauuuuuu</p>
            </div>
            <div class="col-lg">
              <img src="<?php echo base_url()?>assets/img/easy.svg" alt="easy" class="float-left">
              <h4>Easy to Use</h4>
              <p>mudah banget bor tinggal klik klik ences</p>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir info-panel -->
    </div>
    <!-- akhir container -->

    <!-- text mitra -->
    <div class="row justify-content-center text-partners">
      <h1>Our Partners</h1>
    </div>
    <!-- akhir text mitra -->


    <!-- mitra space -->
    <div class="container-space">
      <div class="row partners-space">
        <div class="col-lg-6">
          <img src="<?php echo base_url()?>assets/img/hospital.jpg" alt="hospital" class="img-fluid">
        </div>
        <div class="col-lg-5">
          <h3>HOSPITAL</h3>
          <p>disini pusat pengobatan lengkap mang, besar juge weh dan tenaga medisnya lumayan banyak. ada ambulance juga wkwk</p>
          <a href="" class="btn btn-primary">list selengkapnya</a>
        </div>
      </div>

      <div class="row partners-space">
        <div class="col-lg-6">
          <img src="<?php echo base_url()?>assets/img/klinik.jpg" alt="clinic" class="img-fluid">
        </div>
        <div class="col-lg-5">
          <h3>CLINIC</h3>
          <p>ini lebih kecil tempatnya bor, tenaga medis nay dikit, tapi biasanya ada dimana-mana heheh</p>
          <a href="" class="btn btn-primary">list selengkapnya</a>
        </div>
      </div>
    </div>
    <!-- akhir mitra space -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>