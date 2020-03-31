<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medgency</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png') ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <style type="text/css">
  	.navbar-blue {
    	background-color: #499eff;
    	color: #fff;
		}
	  .navbar-blue .navbar-brand {
    	color: #fff;
	  }
    .navbar-brand{
      font-weight: bold;
      font-size: 16;
    }
	  .navbar-blue .navbar-nav > li > a {
    	color: #fff;
	  }
    .navbar-blue .navbar-nav > li > a:hover,
    .navbar-blue .navbar-nav > li > a:focus {
      background-color: #328ffa;
      color: #fff;
    }
	  .box {
		  margin-top: 80px;
      margin-bottom: 20px;
		  padding: 10px;
		  background-color: #fff	;
		  border-radius: 5px;
	  }
	  body {
		  background-color: #D8D8D8;
      height: 80px;
	  }
  </style>
</head>
<body>
<nav class="navbar navbar-blue navbar-expand-lg navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url() ?>">
        Medgency
      </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
      <li><a href="#">Mitra</a></li>
      <li><a href="#">Booking</a></li>
      <li><a href="#">Order</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right text-center">
      <li class="dropdown pull-right">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Akun
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Login</a></li>
          <li><a href="#">Sign Up</a></li>
          <li><a href="#">Edit Profile</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<!-- <?php echo base_url('index.php/web/jurusan') ?> -->
