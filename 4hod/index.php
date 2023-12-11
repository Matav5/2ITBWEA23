<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
</head>
<body>
    <?php
        session_start();

        var_dump($_SESSION);

        var_dump($_POST);
        $errors = "";
        if(isset($_POST["login"])){

            if(strlen($_POST["username"]) <= 5){
                $errors .= "Username should be longer than 5 characters \n";
            }
            if(strlen($_POST["password"]) <= 8){
                $errors .= "Password should be longer than 8 characters \n";
            }

            if(empty($errors)){
                //Proces přihlášení
                $_SESSION["isLogged"] = true;
                $_SESSION["username"] = $_POST["username"];
                header("location: profile.php");
                die();

            }

        }
        if(!empty($_POST["register"])){
            //Zvaliduju vstupy
            if(strlen($_POST["username"]) <= 5){
                $errors .= "Username should be longer than 5 characters \n";
            }
            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $errors .= "Email should be an email \n";
            }
            if(strlen($_POST["password"]) <= 8){
                $errors .= "Password should be longer than 8 characters \n";
            }
            /*
                všechny vstupy povinný
                
                jméno: text delší jak 5 znaků

                email: musí to být email

                heslo: text a delší jak 8 znaků 
            */
            
            if(empty($errors)){
                echo "REGISTRATION STARTEEEEED ME VERY GUD WETHR!";
            }
        }
        echo $errors;
    ?>

    <h2>Login:</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username"><br>

        <label for="password">Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login!">
    </form>

    <h2>Registration:</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?= empty($_POST["username"]) ? "" : $_POST["username"] ?>"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= empty($_POST["email"]) ? "" : $_POST["email"] ?>"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" value="<?= empty($_POST["password"]) ? "" : $_POST["password"] ?>"><br>
        <input type="submit" name="register" value="Register!">
    </form>

    <span style="color: red;">
        <?php echo $errors ?>
    </span>
</body>
</html>