<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
        require_once 'db.php';

        if(isset($_POST["smaz"])){
            $id = $_POST["id"];
            $sqlMazani = "DELETE FROM deti WHERE id = $id;";
            $con->query($sqlMazani);
        }


        $sql = "SELECT * FROM deti;";
        $result = $con->query($sql);

        print_r($result);

        while($zaznam = $result->fetch_object())
        {
            echo "<br>";
            vytvorHTMLDitete($zaznam);
        }


        function vytvorHTMLDitete($zaznam){

            $jeHodny = $zaznam->je_hodny ?  "✔" : "❌";
            echo "
                <div class=\"dite\">
                    <h2>$zaznam->jmeno ($zaznam->vek let)</h2>
                    <span>Je hodný: $jeHodny </span>
                    <p>Žije v $zaznam->stat a přeje si: $zaznam->preje_si</p>
                </div>

                <form action=\"\" method=\"post\">
                <input type=\"hidden\" name=\"id\" value=\"$zaznam->id\">
                <input type=\"submit\" name=\"smaz\" value=\"❌\">
            </form>
            ";
        }
    ?>

   
</body>
</html>