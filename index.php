<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Made With Love !</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css"> <!--Lien pour librarie icones-->
</head>
<body>

    
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
        <a class="h2 nav-link text-white py-2" href="#">Evénements </a>
      </li>
      <li class="nav-item bg-danger border rounded mx-2 font-weight-bold">
        <a class="h2 nav-link text-white px-5 py-2" href="#">Equipe</a>
      </li>
      <li class="nav-item bg-danger border rounded mx-2  font-weight-bold">
        <a class="h2 nav-link disabled text-white px-5 py-2" href="#"> Avis </a>
      </li>
    </ul>

  </div>
</nav> 
</header>

<div class="container p-0 my-4 ">
  <div clas="col w-lg-25 w-md-25 w-sm-100 w-xs-100">
    <div class="card">
      <div class="card-header">
        <h2>Inscription egdwdws</h2>
      </div>
      
      <div class="card-body">
        <form method="POST" action="index_controller.php">
          
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
                <select id="gender" name="gender" >
                  <option value="Homme" selected>Homme</option>
                  <option value="Femme">Femme</option>
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
                    <option value="Homme">Un homme</option>
                    <option value="Femme" selected>Une femme</option>
                </select>
          </div>
          
          <div class="row">
            <div lass="col mx-4 my-2">
              <button type="submit"   value="Valider">Valider </button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>










<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container-fluid p-0 pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-facebook"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-linkedin"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Abonnez-vous à notre newsletter!</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Addresse email</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    
    <!-- Section: Text -->

    <!-- Section: Links -->
    

  <!-- Copyright -->
  <div class="text-center px-0 py-3 w-100" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">La Manu</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>

</body>
</html>