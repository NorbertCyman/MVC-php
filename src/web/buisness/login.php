<?php
require_once './connect.php';
session_start();
if(isset($_POST['login']) && isset($_POST['haslo'])){
    $login = $_POST['login'];
    $haslo = hash('sha256', $_POST['haslo']);
    $user = $db->users->findOne(['login' => $login]);
    if($user['haslo'] == $haslo){
        $_SESSION['login'] = $login;
        header("Location: /logowanie?success=1");
        exit();
    }
    else{
        header("Location: /logowanie?success=0");
        exit();
    }
}?>

<!-- 
Norbert 123
Student Student
-->