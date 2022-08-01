<?php
session_start();
include_once(dirname(dirname(__FILE__)) . "/config/config.php");
include_once(dirname(dirname(__FILE__)) . "/config/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?php echo isset($view) ? APP_NAME . " | " . $view : $APP_NAME ?></title>
</head>

<body class="bg-warning">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-lg sticky-top">
        <div class="container-fluid ">
            <a class="navbar-brand" href="<?php echo APP_URL; ?>/index.php">
                РОБОКОД
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item my-1">
                        <a id="basic" class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>index.php">
                            Почетна
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a id="basic" class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>pages/about.php">
                            О нама
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a id="basic" class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>pages/locations/locations.php">
                            Локације
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a id="rkc" class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>pages/locations/centar.php">
                            Робокод Центар
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a id="rkn" class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>pages/locations/nis.php">
                            Робокод Ниш
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a id="rkl" class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>pages/locations/leskovac.php">
                            Робокод Лесковац
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a id="rkv" class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>pages/locations/vranje.php">
                            Робокод Врање
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a id="basic" class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>pages/comb_course.php">
                            Програми
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a id="basic" class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>pages/contact.php">
                            Припремна настава
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a id="basic" class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>pages/gallery.php">
                            Галерија
                        </a>
                    </li>
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

                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>