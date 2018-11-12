<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fontawesome/css/all.css"); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css"); ?>">

	<script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/jquery-3.3.1.min.js"); ?>" ></script>

  <script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/function.js"); ?>" ></script>
	<script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>" ></script>


</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('Home/index') ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo site_url('Home/gallery') ?>">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Home/registry') ?>">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>



