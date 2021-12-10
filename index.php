<?php
include_once("header.php");
?>
<div class="container p-0 my-4 ">
  <div clas="col w-lg-25 w-md-25 w-sm-100 w-xs-100">
    <div class="card">
      <div class="card-header">
        <h2>Inscription egdwdws</h2>
      </div>

      <div class="card-body">
        <form method="POST" action="controllers/index_controller.php">

          <div class="row">
            <div class="col-md-3 col-lg-3 mx-md-4 mx-lg-4 my-1">
              <label for="lastname">Votre nom</label>
              <input type="text" id="lastname" name="lastname" placeholder="" required class="w-xs-100 w-sm-100">
            </div>
          </div>

          <div class="row">
            <div class="col mx-4 my-1">
              <label for="firstname">Votre prénom</label>
              <input id="firstname" name="firstname" placeholder="" required>
            </div>
          </div>

          <div class="row">
            <label for="age">Votre age</label>
            <input type="number" min="18" max="75" id="age" name="age" placeholder="" required>
          </div>

          <div class="row">
            <label for="gender">Votre sexe</label>
            <select id="gender" name="gender">
              <option value="homme" selected>Homme</option>
              <option value="femme">Femme</option>
            </select>
          </div>

          <div class="row">
            <label for="zipcode">Code postal</label>
            <input type="text" id="zipcode" name="zipcode" placeholder="" required>
          </div>

          <div class="row">
            <label for="mail">E-mail</label>
            <input type="mail" id="mail" name="mail" placeholder="" required>
          </div>

          <div class="row">
            <label for="research_type">Vous recherchez...</label>
            <select id="research_type" name="research_type">
              <option value="homme">Un homme</option>
              <option value="femme" selected>Une femme</option>
            </select>
          </div>

          <div class="row">
            <div lass="col mx-4 my-2">
              <button type="submit" value="Valider">Valider </button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
</div>
<?php
include_once("footer.php");
?>