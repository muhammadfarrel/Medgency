<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .info-panel{
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
            border-radius: 12px;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 30px;
            padding-bottom: -100px;
        }

        .teams{
            margin-top: 50px;
            margin-bottom: 30px;
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
        
        .about-us{
            margin-top: 15px;
            margin-bottom: 30px;
        }
        #profile{
          width: 100px;
          height: 100px;
          object-fit: cover;
        }
        #team{
          padding-bottom: 20px;
        }
    </style>

    <title>About Us</title>
  </head>
  <body>

    <div class="container">
        <hr/>
        <div class="row text-center">
            <div class="col-md-12"><h2  style="margin:0;"><b>About Us</b></h2></div>
        </div>
        <hr/>
        <div class="row text-center">
         <div class="col-md-6"></div>		
         <div class="col-md-6"></div>
        </div>
    </div>

    <div class="container about-us">
        <div class="row">
            <div class="col-sm-6" style="text-align: center;">
                <img width="60%" class="img-fluid" alt="about-us-page" src="<?php echo base_url()?>assets/img/aboutus.svg" />	            
            </div>
            <div class="col-md-6">
                <p>Medgency merupakan perangkat lunak berbasis web yang memudahkan user mendapatkan layanan kesehatan karena terdapat beberapa tingkat penyakit yang membutuhkan penanganan yang cepat.</p>
                <p>Maka dari itu kami membuat terobosan untuk memberikan pelayanan kesehatan yang cepat.</p>
                <p>Target user dari Medgency adalah masyarakat yang membutuhkan layanan kesehatan.</p>
                <p>Kami membuat medgency dikarenakan sistem penanganan pasien yang ada di rumah sakit atau klinik tidak efisien.</p>
            </div>
        </div>
    </div>
    
    <div class="container containerpanel">
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

    <div class="container teams" id="team">
        <div class="text-center" style="margin-bottom: 30px;">
            <h2>Meet the Team</h2>
        </div>
        <?php $n = 1; 
              foreach($data as $value){
                $dat[$n] = json_decode($value->data);
                $n = $n + 1;
              }
        ?>
        <div class="row" style="padding-bottom: 10px; padding-left: 60px">
            <div class="col-md-6">
              <div class="row">
                <div class="col-3 mb48">
                  <img src="<?php echo base_url()?>assets/img/farrel.jpg" id="profile" class="img-responsive rounded-circle shadow">
                </div>
                <div class="col-9 col-md-8 mb48">
                  <h4 class="mt0"><b><?= $dat[2]->nama?></b> • <?= $dat[2]->ket?></h4>
                  <p class="small"><?= $dat[2]->deskripsi?></p>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-6">
              <div class="row">
                <div class="col-3 mb48">
                <img src="<?php echo base_url()?>assets/img/aziz.jpg" id="profile" class="img-responsive rounded-circle shadow">
                </div>
                <div class="col-9 col-md-8 mb48">
                  <h4 class="mt0"><b><?= $dat[1]->nama?></b> • <b><?= $dat[1]->ket?></h4>
                  <p class="small"><?= $dat[1]->deskripsi?></p>
                </div>
              </div>
            </div> -->
            <div class="col-md-6">
              <div class="row">
                <div class="col-3 mb48">
                <img src="<?php echo base_url()?>assets/img/huda.jpg" id="profile" class="img-responsive rounded-circle shadow">
                </div>
                <div class="col-9 col-md-8 mb48">
                  <h4 class="mt0"><b><?= $dat[5]->nama?></b> • <?= $dat[5]->ket?></h4>
                  <p class="small" ><?= $dat[5]->deskripsi?></p>
                </div>
              </div>
            </div>
        </div>
        <div class="row" style="padding-bottom: 10px; padding-left: 60px">
            <div class="col-md-6">
              <div class="row">
                <div class="col-3 mb48">
                <img src="<?php echo base_url()?>assets/img/haris.jpg" id="profile" class="img-responsive rounded-circle shadow">
                </div>
                <div class="col-9 col-md-8 mb48">
                  <h4 class="mt0"><b><?= $dat[3]->nama?></b> • <?= $dat[3]->ket?></h4>
                  <p class="small"><?= $dat[3]->deskripsi?></p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-3 mb48">
                <img src="<?php echo base_url()?>assets/img/daffa.jpg" id="profile" class="img-responsive rounded-circle shadow">
                </div>
                <div class="col-9 col-md-8 mb48">
                  <h4 class="mt0"><b><?= $dat[4]->nama?></b> • <?= $dat[4]->ket?></h4>
                  <p class="small"><?= $dat[4]->deskripsi?></p>
                </div>
              </div>
            </div>
        </div>
        <!-- <div class="row" style="padding-left: 60px">
            <div class="col-md-6">
              <div class="row">
                <div class="col-3 mb48">
                <img src="<?php echo base_url()?>assets/img/huda.jpg" id="profile" class="img-responsive rounded-circle shadow">
                </div>
                <div class="col-9 col-md-8 mb48">
                  <h4 class="mt0"><b><?= $dat[5]->nama?></b> • <?= $dat[5]->ket?></h4>
                  <p class="small" ><?= $dat[5]->deskripsi?></p>
                </div>
              </div>
            </div>
        </div> -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>