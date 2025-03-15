<?php
require_once './connect.php';

if(isset($_POST['login']) && isset($_POST['haslo']) && isset($_POST['email'])){
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $haslo2 = $_POST['haslo2'];
    $email = $_POST['email'];

    
    if($db->users->findOne(['login' => $login])){
        header("Location: /rejestracja?success=0");
        exit();
    }
    else{
        if($haslo != $haslo2){
            header("Location: /rejestracja?success=0");
            exit();
        }
        else {
            $haslo = hash('sha256', $haslo);
            $user = [
            'login' => $login,
            'haslo' => $haslo
            ];
            $db->users->insertOne($user);
            header("Location: /rejestracja?success=1");
            exit();
        }
    }
}
else{
header("Location: /rejestracja?success=0");
exit();
}
?>