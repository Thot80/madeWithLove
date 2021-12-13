<?php
include_once("header.php");
?>
<div class="row">
		<div class="col-md-6 m-md-4">
        <div class="card">
              <div class="card-header">
                <h2 class="fw-bold text-danger text-center">Inscription</h2>
              </div>
              
          <div class="card-body">
            <form method="POST" action="controllers/index_controller.php">
          
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
                        <input type="number" min="18" max="75" id="age" name="age" required class="form-control">
                      </div>
                      
                      <div class="col-md-6 h5 text-center fw-bold ">
                        <label for="research_type" class="form-label">Je recherche...</label>
                         <select id="research_type" name="research_type" class="form-control">
                            <option value="homme">Un homme</option>
                            <option value="femme" selected>Une femme</option>
                        </select>
                        
                        <label for="age_wished" class="form-label">Age</label>
                        <input type="number" min="18" max="75" id="age_wished" name="age_wished"  required class="form-control">
                      </div>
                    </div>
                    
                    <div class="h5 text-center fw-bold">
                      <label for="mail" class="form-label">E-mail</label>
                      <input type="email" id="mail" name="mail" required class="form-control">
                    </div>
                    
                    <div class=" d-flex justify-content-center mx-5">
                      <button type="submit"   value="Valider" class=" p-4 text-uppercase fw-bold text-danger form-control">Valider</button>
                    </div>
              </div>
            </form>
          </div>
        </div>
            
    </div>       
     <div class="col-md-6">
		</div>       
            
    
    
</div>
<?php
include_once("footer.php");
?>
