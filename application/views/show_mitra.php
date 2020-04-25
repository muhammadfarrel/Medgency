<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Mitra</title>
    <style type="text/css">
        /* .container{
            margin-top: 8%;
        } */
        #card{
           margin-top: 20px; 
        }
        .inner{
            overflow: hidden;
        }

        .inner img{
            transition: all 1.5s ease;
        }

        .inner:hover img{
            transform: scale(1.5);
        }
        #texting{
            margin-top: 10px;
        }
    
    </style>
</head>
<body>
    <div class="row justify-content-center text-partners" id = "texting">
      <h1><?php echo $nama ?></h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($mitra as $m): ?>
            <div class="col-md-4 mb-5" id = "card">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="https://www.healthcareitnews.com/sites/hitn/files/120319%20CaroMont%20Regional%20Medical%20Center%20712.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title"><?php echo $m['nama'] ?></h5>
                      <p class="card-text"><?php echo $m['address'] ?></p>
                      <p class="card-text"><?php echo $m['waktu'] ?></p>
                      <a href="<?= site_url(); ?>/user/dokterMitra/<?= $m['id'] ?>" class="btn btn-info">See Doctor</a>
                    </div>
                  </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>