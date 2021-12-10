<?php
$root = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["HTTP_HOST"];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Made With Love !</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= $root; ?>/assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <!--Lien pour librarie icones-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= $root; ?>/index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?= $root; ?>/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $root; ?>/views/lovers.php">Voir nos célibataires</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $root; ?>/views/user.php">Mon Compte</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <!-- <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand " href="#">
                  <img src="assets/img/logo.png" width="100" height="100" alt="logo du site" class="d-inline-block ">
                  <img src="assets/img/titre.png" width="auto" height="80" alt="titre du site" class="d-inline-block ">
              </span>      
              </a>
            
            
    <button class="navbar-toggler custom-toggler me-4"
            type="button"
            data-toggle="collapse"
            data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01"
            aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
        <li class="nav-item active bg-danger border rounded mx-2 font-weight-bold ">
          <a class="h2 nav-link text-white py-2" href="/views/lovers.php">Lovers</a>
        </li>
        <li class="nav-item bg-danger border rounded mx-2 font-weight-bold">
          <a class="h2 nav-link text-white px-5 py-2" href="views/user.php">User</a>
        </li>
        <li class="nav-item bg-danger border rounded mx-2  font-weight-bold">
          <a class="h2 nav-link disabled text-white px-5 py-2" href="index.php">Home </a>
        </li>
      </ul>

    </div>
  </nav> 
</header> -->