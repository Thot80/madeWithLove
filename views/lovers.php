<?php
$root = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["HTTP_HOST"];
include_once("../header.php");
require "../controllers/lovers_controller.php";
?>
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
                            <div class="text-center"><button type="button" class="btn fs-5 rounded-pill" id="like"><i class="fas fa-heart"></i></button>
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
<?php
include_once("../footer.php");
?>