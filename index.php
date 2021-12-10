<?php
include_once("header.php");
?>
<<<<<<< HEAD
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
  



=======
>>>>>>> main
<div class="row">
		<div class="col-md-6 m-md-4">
        <div class="card">
              <div class="card-header">
                <h2 class="fw-bold text-danger text-center">Inscription</h2>
              </div>
              
          <div class="card-body">
            <form method="POST" action="controllers/index_controller.php" role="form">
          
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
                          <option value="homme" selected>Homme</option>
                          <option value="femme">Femme</option>
                        </select>
                        
                        <label for="age" class="form-label">Age</label>
                        <input type="number" min="18" max="75" id="age" name="age" placeholder="" required class="form-control">
                      </div>
                      
                      <div class="col-md-6 h5 text-center fw-bold ">
                        <label for="research_type" class="form-label">Je recherche...</label>
                         <select id="research_type" name="research_type" class="form-control">
                            <option value="homme">Un homme</option>
                            <option value="femme" selected>Une femme</option>
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
<<<<<<< HEAD








<?php
include_once("footer.php");
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>

</body>
</html>
=======
<?php
include_once("footer.php");
?>
>>>>>>> main
