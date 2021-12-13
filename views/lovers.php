<?php

$root = $_SERVER["REQUEST_SCHEME"]."://". $_SERVER["HTTP_HOST"];
include_once("../header.php");
require "../controllers/lovers_controller.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand " href="#">
                <img src="assets/img/logo.png" width="100" height="100" alt="logo du site" class="d-inline-block ">
                <img src="assets/img/titre.png" width="auto" height="80" alt="titre du site" class="d-inline-block ">
                <!--<span class="navbar-text h1 text-uppercase text-dark ">made with "<span class="fw-bold text-danger">love</span>"-->
                </span>
            </a>


            <button class="navbar-toggler custom-toggler me-4" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                    <li class="nav-item active bg-danger border rounded mx-2 font-weight-bold ">
                        <a class="h2 nav-link text-white py-2" href="lovers.php">Lovers</a>
                    </li>
                    <li class="nav-item bg-danger border rounded mx-2 font-weight-bold">
                        <a class="h2 nav-link text-white px-5 py-2" href="user.php">User</a>
                    </li>
                    <li class="nav-item bg-danger border rounded mx-2  font-weight-bold">
                        <a class="h2 nav-link disabled text-white px-5 py-2" href="../index.php">Home </a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <?php
            foreach ($loversToShow as $lover) {
            ?>
                <div class="col-lg-4">
                    <div class="card my-2">
                        <div class="img-container">
                            <img src="<?= $lover["picture"]; ?>" class="card-img-top ingtest img-fluid" alt="<?= ($lover["gender"] == "homme") ? "photo d'un homme" : "photo d'une femme"; ?>">
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <p class="float-end me-4 mt-3"><i class="fas fa-map-pin"></i> <?= $lover["zipcode"] ?></p>
                                <h5 class="fs-4"><?= $lover["firstname"] . " " . $lover["lastname"] ?></h5>
                                <h5 class="text-muted"><?= $lover["age"] ?></h5>
                                <hr class="my-2" />
                                <p><?= $lover["description"] ?></p>
                                <div class="text-center"><button type="button" class="btn fs-5 rounded-pill hearts" id="like"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>

<?php
include_once("../footer.php");
?>
