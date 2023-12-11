<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nastavení preference pozadí:</title>
    <?php
        if(isset($_POST["nastav"])){
            $barvicka = $_POST["barvicka"];

            setcookie("barvaPozadi",$barvicka,time()+300);
        }
    ?>
</head>
<body
style="background-color:
    <?php
        echo $_COOKIE["barvaPozadi"];
    ?>
"
>
    
    <form action="" method="post">
        <label for="barvicka">Barva pozadí:</label><br>    
        <input type="color" name="barvicka">
        <input type="submit" name="nastav" value="Nastav preferenci pozadí!">
    </form>
    
</body>
</html>