<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        
        .contain{
            margin-top: 50px;
            margin-bottom: 20px;
        }

        .profile-card{
            width: 400px;
            margin: auto;
            background: #fff;
            box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.5);
            
        }

        .image-container img{
            width:100%;
            height:auto;
        }

        .image-container .title{
            margin-left: 15px;
        }

        .main-container{
           padding: 20px;
        }

        .info{
            color: #00B0FF;
            margin-right: 15px;
        }

        .modal-body{
            text-align: left;
        }
    </style>


</head>
<body>

    <div class="contain">
        <div class="profile-card">
            <div class="image-container">
                <img src="<?php echo base_url()?>assets/img/personal.png">
                <div class="title">
                    <h2><?php echo $profile['nama'] ?></h2>
                </div>
            </div>
            <?php $dat = $this->session->userdata('user'); ?>
            <div class="main-container">
                <p><i class="fa fa-user info"></i><?php echo $profile['username'] ?></p>
                <p><i class="fa fa-envelope info"></i><?php echo $profile['email'] ?></p>
                <p><i class="fa fa-home info"></i><?php echo $profile['address'] ?></p>
                <p><i class="fa fa-phone info"></i><?php echo $profile['phonenumber'] ?></p>
                <div class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">edit profile</button>
                    <!-- modal -->
                    <div class="modal fade" id="editModal" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Profile</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </div>
                                <div class="modal-body mx-3">
                                    <form id="editForm" action="<?= site_url('user/editProfile') ?>" method="POST">
                                        <input type="text" name="id" value="<?= $dat['id'] ?>" hidden>
                                        <div class="form-group">
                                            <i class="fa fa-envelope info"></i>
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="email" name = "email" value = "<?php echo $profile['email'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <i class="fa fa-home info"></i>
                                            <label>Address</label>
                                            <input type="text" class="form-control" id="email" name = "address" value = "<?php echo $profile['address'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <i class="fa fa-phone info"></i>
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" id="email" name = "phonenumber" value="<?php echo $profile['phonenumber'] ?>" required>
                                        </div>
                                        <div class="text-center"><button type="submit" class="btn btn-primary ">Edit Profile</button></div>
                                        
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>