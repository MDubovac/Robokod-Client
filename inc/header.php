<?php 
  session_start();
  include_once(dirname(dirname(__FILE__)) . "/config/config.php");
  include_once(dirname(dirname(__FILE__)) . "/config/db.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Robokod</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <?php if (isset($_SESSION["token"])) { ?>
                            <li class="nav-item mx-3">
                                <a class="btn btn-outline-primary" aria-current="page" href="<?php echo APP_URL; ?>pages/customers/adminPanel.php">
                                    Admin
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-danger" aria-current="page" href="<?php echo APP_URL; ?>scripts/logout.php">
                                    Odjava
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="btn btn-outline-primary" aria-current="page" href="<?php echo APP_URL; ?>pages/login.php">
                                    Prijava
                                </a>
                            </li>
                        <?php } ?>
                </ul>
            </div>
        </div>
    </nav>