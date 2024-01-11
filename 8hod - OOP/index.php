<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - Clashko</title>
</head>
<body>
    <?php
        class Karticka {

            public $id;
            public string $nazev;

            public int $cenaElixiru;

            public string $rarita;

            public bool $jeToBudova;

            public string $obrazek;

            function __construct(string $nazev, int $cenaElixiru,
             string $rarita, bool $jeToBudova, string $obrazek, $id = null){
                  $this->nazev = $nazev;
                  $this->cenaElixiru = $cenaElixiru;
                  $this->rarita = $rarita;
                  $this->jeToBudova = $jeToBudova;
                  $this->obrazek = $obrazek;
                  $this->id = $id;
            }
            fUnCtIon vypis(){
                $jeToBudova = $this->jeToBudova ? "✔" : "❌";
                $slovnikBarvicek = [
                    "common" => "lightblue",
                    "rare" => "orange",
                    "epic" => "purple",
                    "legendary" => "linear-gradient(90deg,rgb(0,0,256)  0%, rgb(0,0,256) 5%,  rgb(0,0,0) 100% )",
                    "champion" => "yellow"
                ];

                $barvicka = $slovnikBarvicek[$this->rarita];

                echo "
                <div class='karticka' style='background:  $barvicka;'>
                <h1>$this->nazev ($this->cenaElixiru)</h1>
                <p>Je to budova: $jeToBudova </p>
                <img src='$this->obrazek' width='200' height='200'>
                </div>";
            }

            function uloz(){
                require_once 'db.php';
                if($this->id == null){
                    //Ulož
                    $jeToBudova = $this->jeToBudova ? "true" : "false";
                    $sql = "INSERT INTO karticky VALUES(null, '$this->nazev', 
                    $this->cenaElixiru, '$this->rarita', $jeToBudova, '$this->obrazek');";
                    $con->query($sql);
                }
                else{
                    //Uprav
                    $jeToBudova = $this->jeToBudova ? "true" : "false";
                    $sql = "UPDATE karticky 
                    SET
                    nazev = '$this->nazev',
                    cenaElixiru = $this->cenaElixiru,
                    rarita = '$this->rarita',
                    jeToBudova = $jeToBudova,
                    obrazek = '$this->obrazek'
                    WHERE id = $this->id;
                    ";
                    $con->query($sql);
                }
            }
        }

        $karticka = new Karticka("Hog Rider", 5, "champion", false,
"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwallpapercave.com%2Fwp%2Fwp2078606.jpg&f=1&nofb=1&ipt=4af49e805d3786a1d342c605aebf87d3315d7fbe424995034988438b9d6051ae&ipo=images",1);

        $karticka->vypis();
        $karticka->uloz();
    ?>
</body>
</html>