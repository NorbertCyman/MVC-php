<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <?php require_once "nav.php";?>
    <?php
    if($logowanie==1){
        echo "logowanie udane";
    }
    else{
        if($logowanie==0) echo "logowanie nie powiodło się";
        ?>
        <form action="buisness/login.php" method="post">
            Login: <input type="text" name="login" required> <br />
            Hasło: <input type="password" name="haslo" required> <br />
            <input type="submit" value="Zaloguj">
        </form>

        <?php
    }
    ?>
</body>
</html>