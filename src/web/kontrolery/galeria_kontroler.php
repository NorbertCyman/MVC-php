<?php
require_once "modele/galeria_model.php";
$data = pobierz_zdjecia();
extract($data);
require_once "widoki/galeria.php";