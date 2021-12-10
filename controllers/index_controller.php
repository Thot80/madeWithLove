<?php

// On verif la validité des données reçues par le formulaire

if(isset($_POST["lastname"], $_POST["firstname"], $_POST["age"], $_POST["gender"], $_POST["zipcode"], $_POST["mail"],
$_POST["research_type"]) && !empty($_POST["lastname"]) && !empty($_POST["firstname"]) && !empty($_POST["age"]) && !empty($_POST["gender"]) && !empty($_POST["zipcode"]) && !empty($_POST["mail"]) && !empty($_POST["research_type"])){

    // Les données sont bonnes, on les enregistre dans un cookie et on redirige vers la page user.php
    setcookie("lastname", $_POST["lastname"], time() + 86400, '/', 'madeWithLove');
    setcookie("firstname", $_POST["firstname"], time() + 86400, '/', 'madeWithLove');
    setcookie("age", $_POST["age"], time() + 86400, '/', 'madeWithLove');
    setcookie("gender", $_POST["gender"], time() + 86400, '/', 'madeWithLove');
    setcookie("zipcode", $_POST["zipcode"], time() + 86400, '/', 'madeWithLove');
    setcookie("mail", $_POST["mail"], time() + 86400, '/', 'madeWithLove');
    setcookie("research_type", $_POST["research_type"], time() + 86400, '/', 'madeWithLove');

    header('Location: ../views/user.php');
}
// Les données ne sont pas conformes, on redirige vers index.php
else{
    header('Location: ../index.php');
}