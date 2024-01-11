<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    CREATE TABLE deti(
    id int PRIMARY KEY AUTO_INCREMENT,
    jmeno varchar(64),
    je_hodny boolean,
    stat varchar(64),
    preje_si text,
    vek int UNSIGNED
    );
    */
   
        if(isset($_POST["pridejDite"])){

            require_once 'db.php';
            echo "Já se připojil";
            
            $jmeno = $_POST["jmeno"];

            $jeHodny = isset($_POST["jeHodny"]) && $_POST["jeHodny"] == "on" ;
            $stat = $_POST["stat"];
            $prejeSi = $_POST["prejeSi"];
            $vek = $_POST["vek"];

            if(!$jeHodny)
                $jeHodny = 0;
            $sql = "INSERT INTO deti VALUES(NULL, '$jmeno', $jeHodny ,'$stat'  ,'$prejeSi' ,$vek);";

            $con->query($sql);

        }
    ?>
    <form action="" method="post">
        <label for="">Jméno:</label>
        <input type="text" name="jmeno">
        <br>
        <label for="">Je hodný:</label>
        <input type="checkbox" name="jeHodny">
        <br>
        <label for="">Stát:</label>
        <input type="text" name="stat">
        <br>
        <label for="">Přeje si:</label>
        <input type="text" name="prejeSi">
        <br>
        <label for="">Věk:</label>
        <input type="number" name="vek">
        <br>
        <input type="submit" name="pridejDite" value="Uložit dítě do seznamu">
    </form>
</body>
</html>