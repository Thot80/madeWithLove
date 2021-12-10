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




<div class="row">
		<div class="col-md-6 m-md-4">
        <div class="card">
              <div class="card-header">
                <h2 class="fw-bold text-danger text-center">Inscription</h2>
              </div>
              
          <div class="card-body">
            <form method="POST" action="index_controller.php" role="form">
          
                    <div class="form-group">
                       <div class="h5 text-center fw-bold">
                        <label for="lastname" class="form-label">Votre nom</label>
                        <input type="text" id="lastname" name="lastname" placeholder="" required class="form-control">
                       </div>
                       
                       
                    <div class="h5 text-center fw-bold">
                      <label for="firstname" class="form-label">Votre prénom</label>
                      <input id="firstname" name="firstname" placeholder="" required class="form-control">
                    </div>
                    
                    <div class="h5 text-center fw-bold">
                      <label for="zipcode" class="form-label">Code postal</label>
                      <input type="text" id="zipcode" name="zipcode" placeholder="" required class="form-control">  
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6 h5 text-center fw-bold ">
                        <label for="gender" class="form-label">Je suis</label>
                        <select id="gender" name="gender" class="form-control">
                          <option value="Homme" selected>Homme</option>
                          <option value="Femme">Femme</option>
                        </select>
                        
                        <label for="age" class="form-label">Age</label>
                        <input type="number" min="18" max="75" id="age" name="age" placeholder="" required class="form-control">
                      </div>
                      
                      <div class="col-md-6 h5 text-center fw-bold ">
                        <label for="research_type" class="form-label">Je recherche...</label>
                         <select id="research_type" name="research_type" class="form-control">
                            <option value="Homme">Un homme</option>
                            <option value="Femme" selected>Une femme</option>
                        </select>
                        
                        <label for="age" class="form-label">Age</label>
                        <input type="number" min="18" max="75" id="age" name="age" placeholder="" required class="form-control">
                      </div>
                    </div>
                    
                    <div class="h5 text-center fw-bold">
                      <label for="mail" class="form-label">E-mail</label>
                      <input type="mail" id="mail" name="mail" placeholder="" required class="form-control">
                    </div>
                    
                    <div class=" d-flex justify-content-center mx-5">
                      <button type="submit"   value="Valider" class=" p-4 text-uppercase fw-bold text-danger form-control">Valider</button>
                    </div>
            </form>
                  </div>
          </div>
        </div>
            
    </div>       
     <div class="col-md-6">
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