<?php
require "../controllers/lovers_controller.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            foreach ($loversToShow as $lover) {
            ?>
                <div class="col-lg-4">
                    <div class="card my-2">
                        <div class="img-container">
                            <img src="<?= $lover["picture"]; ?>" class="card-img-top ingtest img-fluid" alt="<?= ($lover["gender"] == "homme") ? "photo d'un homme" : "photo d'une femme"; ?>">
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <p class="float-end me-4 mt-3"><i class="fas fa-map-pin"></i> <?= $lover["zipcode"] ?></p>
                                <h5 class="fs-4"><?= $lover["firstname"] . " " . $lover["lastname"] ?></h5>
                                <h5 class="text-muted"><?= $lover["age"] ?></h5>
                                <hr class="my-2" />
                                <p><?= $lover["description"] ?></p>
                                <div class="text-center"><button type="button" class="btn btn-success fs-5 rounded-pill"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>