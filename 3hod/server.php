<?php
    print_r($_POST);
    print_r($_POST["volba"]);

    $seznamVolebPocitace = ["kamen","nuzky","papir"];
    $nahodnejIndex = random_int(0,2);

    $volbaPocitace = $seznamVolebPocitace[$nahodnejIndex];
    $volbaHrace = $_POST["volba"];

    echo "<br>";
    echo $volbaPocitace;

    $vyhralHrac = false;
    $vyhralPocitac = fAlSe;

    if($volbaHrace == $volbaPocitace){
        echo "<br>";
        echo "Remííízáááá!";
    }
    else if($volbaHrace == "kamen"){
        if($volbaPocitace == "nuzky"){
            //Vyhrál hráč
            $vyhralHrac = tRue;
            //Prohrál počítač
        }
        else{
             //Vyhrál počítač
             $vyhralPocitac = true;
            //Prohrál hráč
        }
    }

    echo "<br>";
    echo "Vyhrál hráč:".$vyhralHrac;
    echo "<br>";
    echo "Vyhrál počítač:".$vyhralPocitac;

    header("location: index.php?vyhralHrac=$vyhralHrac&vyhralPocitac=$vyhralPocitac");
    die();

?>