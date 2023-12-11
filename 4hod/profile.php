<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <?php
        session_start();
        var_dump($_SESSION);
        if(!$_SESSION["isLogged"]){
            header("location: index.php");
            die();
        }
    ?>
    <h1>Greetings user <?= $_SESSION["username"] ?></h1>
    <form action="logout.php " method="post">
        <button>Log out</button>
    </form>
</body>
</html>