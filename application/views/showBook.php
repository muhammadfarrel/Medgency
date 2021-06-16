<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .card-header{
            background-color: #74b9ff;
            color: white;
        }
        .card-header{
            font-size:large; 
        }
        .btn{
            background-color:#74b9ff;
            color: white;
        }
    </style>
</head>
<body>
    <?php $data = $this->session->userdata('user'); ?>
    <div class="container mt-5">
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Data Booking</strong>
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('user/hapus_book') ?>" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="nama_dokter">Nama Dokter</label>
                                        <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="<?= $booking['nama_dokter'] ?>" disabled>
                                        <small class="form-text text-danger"></small>
                                    </div>
                                    <div class="col">
                                        <label for="spesialis">Spesialis</label>
                                        <input type="text" class="form-control" id="spesialis" name="spesialis" value="<?= $booking['spesialis'] ?>" disabled>
                                        <small class="form-text text-danger"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namapasien">Nama Pasien</label>
                                <input type="text" class="form-control" id="namapasien" name="namapasien" value="<?= $data['nama_user'] ?>" disabled>
                                <small class="form-text text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="keterangan" rows="5" disabled><?php echo $booking['keterangan'] ?></textarea>
                                <!-- <small class="form-text text-muted">masukan data keluhan perlu dicantumkan</small> -->
                            </div>
                            <button type="submit" name="deletebook" class="btn btn-block">Hapus Booking</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>