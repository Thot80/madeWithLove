<?php
include("../controllers/user_controller.php");
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
        <div class="col">Code postal :</div>
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
