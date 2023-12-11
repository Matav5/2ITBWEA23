<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>První hodina PHP</title>
</head>
<body>
    <?php

        echo "<b>Vítejte na první hodině PHP ༼ つ ◕_◕ ༽つ</b>";
        $a = 20;
        $b = 10;
        echo "<br>";

        echo $a + $b . "<br>";
        echo $b;
        
        echo "<br>";
        if($a > $b){
            echo "A je větší jak B";
        }
        else if($a == $b) {
            echo "A je stejně velké jako B";
        }
        else{
            echo "B je větší jak A";
        }

        $pole = ["Já","Jeho jméno","Teďka jeho jméno","Moje jméno"];

        #echo $pole;

        echo "<br>";
        echo "---------------------------------------";
        foreach($pole as $prvek){
            echo "<br>";
            echo $prvek;
        }
        echo "<br>";
        echo "---------------------------------------";
        for($i=0; $i < count($pole); $i++){
            echo "<br>";
            echo $pole[$i];
        }
        echo "<br>";
        echo "---------------------------------------";
        for($i=count($pole)-1; $i >= 0;$i--){
            echo "<br>";
            echo $pole[$i];
        }
        echo "<br>";
        echo "---------------------------------------";
        while($a > $b){
            echo "<br>";
            echo --$a;
        }
        echo "<br>";
        echo "---------------------------------------";

        $vypis = "Super Hustej Mega Šleháckej Výpis!";
        function SuperHustejMegaSlehackejVypis($barvicka){
            gLoBaL $vypis;
            echo "<p style=\"color: $barvicka\"> $vypis </p>";
            $vypis = "Už ne tak moc Šléhacky Mega Super Hustej Výpis";
        }
        SuperHustejMegaSlehackejVypis("crimson");
        SuperHustejMegaSlehackejVypis("hotpink");
        $vypis = "Šlehácky Mega Super Hustej Výpis!";
        SuperHustejMegaSlehackejVypis("cyan");
        SuperHustejMegaSlehackejVypis("#FEB001");

        echo "<br>";
        echo "---------------------------------------";
        echo "<br>";
        $b = 150000000000;

        switch($b){
            case 10:
                echo "B se rovná deseti";
                break;
            default:
                echo "B se nerovná ničemu";
                break;
        }
    ?>
    
</body>
</html>