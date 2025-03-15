<?php
$user = "";
if(isset($_SESSION['login'])) $user = $_SESSION['login'];
require_once "widoki/formularz.php";