
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>
<body>
    <?php require_once "nav.php";?>
    <?php
    if($rejestracja==1){
        echo "Rejestracja udana";
    }
    if($rejestracja==0){
        echo "Rejestracja nie powiodła się";
    }
    ?>
    <form action="buisness/register.php" method="post">
        Email:         <input type="text" name="email"><br />
        Login:         <input type="text" name="login"><br />
        Hasło:         <input type="password" name="haslo"><br />
        Powtórz hasło: <input type="password" name="haslo2"><br />
        <input type="submit" value="Zarejestruj się">
    </form>
</body>
</html>