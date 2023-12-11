<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kámen, nůžky, papír</title>
</head>
<body>
    <?php
        var_dump($_GET);
        if($_GET["vyhralPocitac"]){
            echo "<h1 style='color:red'>Prohrál jsi!</h1>";
        }
        
    ?>
    <form action="server.php" method="post">
        <label for="volba">Kámen:</label>
        <input type="radio" name="volba" value="kamen" checked><br>

        <label for="volba">Nůžky:</label>
        <input type="radio" name="volba" value="nuzky"><br>

        <label for="volba">Papír:</label>
        <input type="radio" name="volba" value="papir"><br>
        <input type="submit" value="Teď!">
    </form>
</body>
</html>