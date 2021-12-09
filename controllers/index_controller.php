<?php

// On verif la validité des données reçues par le formulaire

if(isset($_POST["lastname"], $_POST["firstname"], $_POST["age"], $_POST["gender"], $_POST["zipcode"], $_POST["mail"],
$_POST["research_type"]) && !empty($_POST["lastname"]) && !empty($_POST["firstname"]) && !empty($_POST["age"]) && !empty($_POST["gender"]) && !empty($_POST["zipcode"]) && !empty($_POST["mail"]) && !empty($_POST["research_type"])){

    // Les données sont bonnes, on les enregistre dans un cookie et on redirige vers la page user.php
    setcookie("lastname", $_POST["lastname"], time() + 86400);
    setcookie("firstname", $_POST["firstname"], time() + 86400);
    setcookie("age", $_POST["age"], time() + 86400);
    setcookie("gender", $_POST["gender"], time() + 86400);
    setcookie("zipcode", $_POST["zipcode"], time() + 86400);
    setcookie("mail", $_POST["mail"], time() + 86400);
    setcookie("research_type", $_POST["research_type"], time() + 86400);

    header('Location: ../views/user.php');
}
// Les données ne sont pas conformes, on redirige vers index.php
else{
    header('Location: ../index.php');
}