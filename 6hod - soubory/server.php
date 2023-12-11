<?php

    if(isset($_POST["uloz"])){

        $souborNaNacteni = $_POST["soubor"];
        $soubor = fopen($souborNaNacteni,"a");     
        
        $udalost = "$_POST[datum] - $_POST[popis]\n";
        echo $udalost;
        fwrite($soubor, $udalost);
        fclose($soubor);
    }
    header("location: index.php");
    die();
?>