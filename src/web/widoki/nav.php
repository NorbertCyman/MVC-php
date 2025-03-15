<div class="nav">
    <a href="./galeria">Galeria</a>
    <a href="./formularz">Formularz</a>
    <?php
        if(isset($_SESSION['login'])) echo "<a href='./wyloguj'>Wyloguj [".$_SESSION['login']."]</a>";
        else echo "<a href='./logowanie'>Logowanie</a>";
    ?>
    <a href='./rejestracja'>Rejestracja</a>
</div>