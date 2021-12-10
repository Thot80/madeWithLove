<?php
require("../controllers/user_controller.php");
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
      <!--LA DATA-->
    <div class="container-fluid text-center pt-4 bg-dark text-white h3 ">
        <div>
            <p class="h1 "> <span class="text-danger">L</span>es <span class="text-danger">P</span>aramètres <span class="text-danger">D</span>u <span class="text-danger">P</span>rofil</p>
        </div>
      <div class="row pt-4">
        <div class="col">Nom : </div>
        <div class="col"><?= $lastname;?></div>
        <div class="col text-muted">/modifier</div>
      </div>

      <div class="row">
        <div class="col">Prénom:</div>
        <div class="col"><?= $firstname;?></div>
        <div class="col text-muted">/modifier</div>
      </div>

      <div class="row">
        <div class="col">Genre :</div>
        <div class="col"><?= $age;?></div>
        <div class="col text-muted">/modifier</div>
      </div>

      <div class="row">
        <div class="col">Genre :</div>
        <div class="col"><?= $gender;?></div>
        <div class="col text-muted">/modifier</div>
</div>
      <div class="row">
        <div class="col">Code postal :</div>
        <div class="col"><?= $zipcode;?></div>
        <div class="col text-muted">/modifier</div>
</div>

      <div class="row">
        <div class="col">Adresse mail :</div>
        <div class="col"><?= $research_type;?></div>
        <div class="col text-muted">/modifier</div>
      </div>

	  <form action="../controllers/user_controller.php" method="POST">
      <div class="text-center bg-dark p-4">
        <button name="submit" value="delete" type="submit" class="btn btn-outline-danger btn-lg">EFFACER</button>

    <button type="button" class="btn btn-secondary btn-lg">MEETIC</button>
    </div>
	</form>
    </div>
    <!--LA DATA-->

  </body>
</html>
