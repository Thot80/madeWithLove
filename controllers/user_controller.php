<?php
if (isset($_COOKIE["lastname"], $_COOKIE["firstname"], $_COOKIE["age"], $_COOKIE["gender"], $_COOKIE["zipcode"], $_COOKIE["research_type"]) && !empty($_COOKIE["lastname"]) && !empty($_COOKIE["firstname"]) && !empty($_COOKIE["age"]) && !empty($_COOKIE["gender"]) && !empty($_COOKIE["zipcode"]) && !empty($_COOKIE["mail"]) && !empty($_COOKIE["research_type"])) {

    $lastname = $_COOKIE["lastname"];
    $firstname = $_COOKIE["firstname"];
    $age = $_COOKIE["age"];
    $gender = $_COOKIE["gender"];
    $zipcode = $_COOKIE["zipcode"];
    $research_type = $_COOKIE["research_type"];
} else {
    header('location: ../index.php');
}


if (isset($_POST["submit"]) && $_POST["submit"]  == "delete") {
    setcookie('lastname', '', time() - 3600, '/', "madewithlove.fr");
    setcookie('firstname', '', time() - 3600, '/', "madewithlove.fr");
    setcookie('age', '', time() - 3600, '/', "madewithlove.fr");
    setcookie('gender', '', time() - 3600, '/', "madewithlove.fr");
    setcookie('zipcode', '', time() - 3600, '/', "madewithlove.fr");
    setcookie('research_type', '', time() - 3600, '/', "madewithlove.fr");
    setcookie('mail', '', time() - 3600, '/', "madewithlove.fr");
    header('location: ../index.php');
}
