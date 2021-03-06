<? require_once('config/config.php') ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="author" content="<?php echo $email ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">

    <title><?php echo (isset($title))?$title:'' ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <?if(isset($_SESSION['user_id'])){ ?>
              <li class="nav-item">
                <a class="nav-link" href="panel.php">Panel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
              </li>
             <? }else{?>
              <li class="nav-item">
                <a class="nav-link" href="reg.php">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">login</a>
              </li>
            <?}?>

            <li class="nav-item">
              <a class="nav-link" href="static.php?url=index">Hello</a>
            </li>
            <li class="nav-item">
              <a class="nav-link modalMenu" href="static.php?url=about_us">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="static.php?url=services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="static.php?url=contacts">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="parse.php">Parse</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Shop Name</h1>
<!--
          <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
          </div>
-->
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
