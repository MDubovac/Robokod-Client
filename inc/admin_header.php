<?php 
  session_start();
  include_once(dirname(dirname(__FILE__)) . "/config/config.php");
  include_once(dirname(dirname(__FILE__)) . "/config/db.php");

  if(!isset($_SESSION["token"])) {
      header("Location: ../../index.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/style.css">

    <title>Admin Panel</title>
</head>
<body>
    <!--
    <div class="container my-3">
        <h1>Admin Panel</h1>
        <h4>Korisnik: <?php echo $_SESSION["token"] ?></h4>
        <div class="button">
            <a href="../../index.php" class="btn btn-outline-primary btn mb-3">
                Pogledaj sajt
            </a>

            <a class="btn btn-danger btn mb-3" href="../../scripts/logout.php">
                Odjava
                <i class="fa fa-power-off"></i>
            </a>
        </div>
    </div>-->

<nav class="navbar navbar-expand-lg bg-primary navbar-dark mb-3">
    <div class="container">
        <a class="navbar-brand" href="#">
            Robokod Admin
            <i class="fa fa-lock"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../../pages/customers/adminPanel.php">
                        Lista roditelja
                        <i class="fa fa-users"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../pages/students/allStudents.php">
                        Lista polaznika
                        <i class="fa fa-book"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../pages/search/searchCustomer.php">
                        Pretraga
                        <i class="fa fa-search"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <a class="btn btn-danger" href="../../scripts/logout.php">
                    Odjava
                    <i class="fa fa-power-off"></i>
                </a>
            </ul>
        </div>
    </div>
  </div>
</nav>
