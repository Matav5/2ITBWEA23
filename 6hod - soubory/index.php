<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Databáze duležitých datumů</title>
</head>
<body>
    <?php 
    $souborNaNacteni = "narozeniny.txt";
    if(isset($_GET["soubor"])){
        $souborNaNacteni = $_GET["soubor"];
    }
    $poleDatumu = explode("\n",file_get_contents($souborNaNacteni));

    echo "<ul>";
    foreach($poleDatumu as $datum){
    echo "<li>$datum</li>";
    }
    echo "</ul>";

    ?>
    
    <form action="" method="get" id="vyberForm">
        <select name="soubor" onchange="spustFormular()">
            <option>----------</option>
            <option value="narozeniny.txt">Narozeniny</option>
            <option value="hry.txt">Hry</option>
        </select>
    </form>

    <form action="server.php" method="post">
        <label for="datum">Datum:</label>
        <input type="date" name="datum"><br>
        <label for="popis">Popis Události:</label>
        <input type="text" name="popis"><br>

        <input type="hidden" name="soubor" value="<?= $souborNaNacteni ?>">
        <input type="submit" name="uloz" value="Ulož Událost!">
     </form>
     <script>

        function spustFormular(){
         //   alert("AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA");
            document.getElementById("vyberForm").submit();
        }
     </script>

</body>
</html>