<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formularz</title>
</head>
<body>
    <?php require_once "nav.php";?>
    <form action="buisness/upload.php" enctype="multipart/form-data" method="POST">
        Zdjęcie<br />
        <input type="file" name="zdjecie" accept=".png, .jpg" required><br />
        Znak wodny<br />
        <input type="file" name="znak_wodny" accept=".png, .jpg" required><br />
        Tytuł
        <input type="text" name="tytul" required>
        Autor
        <input type="text" name="autor" required value="<?php echo $user ?>"><br />
        <?php
        if($user != ""){
        ?>
        <input type="radio" name="prywatne" value="Nie">Publiczne
        <input type="radio" name="prywatne"value="Tak">Prywatne<br />
        <?php } ?>
        Wyślij<br />
        <input type="submit" value="Wyślij">
    </form>

</body>
</html>