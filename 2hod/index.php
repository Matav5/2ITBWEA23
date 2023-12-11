<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshop</title>
    <link rel="stylesheet" href="style.css">
    <?php
        require_once "hlavicka.php";
        require_once "hlavicka.php";
        require_once "hlavicka.php";
    ?>
</head>
<body>

<?php

    function vytvorProdukt($obrazek,$nazev,$cena,$popis){
       GLOBAL $jeAdmin;
       ?>
            <div class="produkt">
                    <img src="<?= $obrazek ?>">
                    <h3><?= $nazev ?></h3>
                    <p><?= $cena ?>,-</p>
                    <p><?= $popis ?></p>

                    <?php
                        if($jeAdmin){
                            
                            ?>
                            <div>
                                <button>Upravit</button>
                                <button>Odstranit</button>
                            </div>
                            <?php
                        }
                    ?>

                </div>
        <?php
    }
    vytvorProdukt("https://nerfguns.net/wp-content/uploads/2014/12/nerf-crossbolt1.jpg",
    "Mega hustá Nerf guna 🔫",
    349.90,
    "Mega hustá nerfka pro mega hustý chlapy.");
    vytvorProdukt("https://nerfguns.net/wp-content/uploads/2014/12/nerf-crossbolt1.jpg",
    "Jiná hustá Nerf Guna 🔫",
    649.90,
    "Fakt jiná hustá nerfka pro mega hustý chlapy.");
    

?>
 

<?php
    //include_once
    include "footer.php";
?>
</body>
</html>