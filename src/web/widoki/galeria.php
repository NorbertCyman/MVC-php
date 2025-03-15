<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Moje hobby</title>
</head>
<body>
    <?php require_once "nav.php";?> 
    <div class="galeria-content">
    <div class="galeria">
        <?php
        foreach ($zdjecia as $zdjecie) {
        echo '
        <div class="obraz">
        <a href="./images/A'.$zdjecie['name'].'" target="_blank">
        <img src="images/min'.$zdjecie['name'].'" alt="123" onclick="location"/><br/>
        </a>
        '.$zdjecie['tytul'].'<br />
        Autor: '.$zdjecie['autor'].'
        </div>
        '; 
        }
        ?>
    </div>
    <div class="strony">
        <?php
        for($i=1;$i<=$ilosc_stron;$i++){
            echo "<a href='/galeria?page=$i'><div class='przycisk_strona'>$i</div></a>";
        }
        ?>
    </div>
    </div>
</body>
</html>
