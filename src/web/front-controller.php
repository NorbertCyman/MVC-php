<?php
//obsługa sesji
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//kontrola dostępu
// require 'access.php';= 'widoki/galeria.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
    <?php
    require_once "routing.php";
    ?>

    </div>
</body>
</html>