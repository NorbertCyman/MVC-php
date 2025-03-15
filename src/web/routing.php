<?php
$action_url = $_GET['action'];
switch ($action_url) {
    case '/galeria':
    $kontroler = 'kontrolery/galeria_kontroler.php';
    break;
    case '/formularz':
    $kontroler = 'kontrolery/formularz_kontroler.php';
    break;
    case '/logowanie':
    $kontroler = 'kontrolery/logowanie_kontroler.php';
    break;
    case '/wyloguj':
        $kontroler = 'kontrolery/wyloguj_kontroler.php';
    break;
    case '/rejestracja':
        $kontroler = 'kontrolery/rejestracja_kontroler.php';
    break;
    default:
    $kontroler = 'kontrolery/galeria_kontroler.php';
}
require_once $kontroler;
