<?php
<<<<<<< HEAD
$root = $_SERVER["REQUEST_SCHEME"]."://". $_SERVER["HTTP_HOST"];
include_once("../header.php");
require("../controllers/user_controller.php");
?>
      <!--LA DATA-->
    <div class="container-fluid text-center pt-4 bg-dark text-white h3 ">
        <div>
            <p class="h1 "> <span class="text-danger">L</span>es <span class="text-danger">P</span>aramètres <span class="text-danger">D</span>u <span class="text-danger">P</span>rofil</p>
        </div>
      <div class="row pt-4">
        <div class="col">Nom : </div>
        <div class="col"><?= $lastname;?></div>
      </div>

      <div class="row">
        <div class="col">Prénom:</div>
        <div class="col"><?= $firstname;?></div>
      </div>

      <div class="row">
        <div class="col">Age :</div>
        <div class="col"><?= $age;?></div>
      </div>

      <div class="row">
        <div class="col">Genre :</div>
        <div class="col"><?= $gender;?></div>
</div>
      <div class="row">
        <div class="col">Code postal :</div>
        <div class="col"><?= $zipcode;?></div>
</div>

      <div class="row">
        <div class="col">Adresse mail :</div>
        <div class="col"><?= $research_type;?></div>
      </div>

	  <form action="../controllers/user_controller.php" method="POST">
      <div class="text-center bg-dark p-4">
        <button name="submit" value="delete" type="submit" class="btn btn-outline-danger btn-lg">EFFACER</button>

    <a href="https://www.meetic.fr/" target="_blank" class="btn btn-secondary btn-lg">MEETIC</a>
    </div>
	</form>
    </div>
    <!--LA DATA-->

<?php
  include_once("../footer.php");
=======
$root = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["HTTP_HOST"];
include_once("../header.php");
require("../controllers/user_controller.php");
?>
<!--LA DATA-->
<div class="container-fluid text-center pt-4 bg-dark text-white vh-100">
  <div>
    <p class="h1 "> <span class="text-danger">L</span>es <span class="text-danger">P</span>aramètres <span class="text-danger">D</span>u <span class="text-danger">P</span>rofil</p>
  </div>
  <div class="row pt-4">
    <div class="col">Nom : </div>
    <div class="col"><?= $lastname; ?></div>
  </div>

  <div class="row">
    <div class="col">Prénom:</div>
    <div class="col"><?= $firstname; ?></div>
  </div>

  <div class="row">
    <div class="col">Age :</div>
    <div class="col"><?= $age; ?></div>
  </div>

  <div class="row">
    <div class="col">Genre :</div>
    <div class="col"><?= $gender; ?></div>
  </div>
  <div class="row">
    <div class="col">Code postal :</div>
    <div class="col"><?= $zipcode; ?></div>
  </div>

  <div class="row">
    <div class="col">Adresse mail :</div>
    <div class="col"><?= $research_type; ?></div>
  </div>

  <form action="../controllers/user_controller.php" method="POST">
    <div class="text-center bg-dark p-4">
      <button name="submit" value="delete" type="submit" class="btn btn-outline-danger btn-lg">EFFACER</button>

      <a href="https://www.meetic.fr/" target="_blank" class="btn btn-secondary btn-lg">MEETIC</a>
      <a href="lovers.php" class="btn btn-outline-danger btn-lg">LOVERS</a>
    </div>
  </form>
</div>
<!--LA DATA-->

<?php
include_once("../footer.php");
>>>>>>> main
?>