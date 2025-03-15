<?php
    if(!isset($_GET['success'])){
        $rejestracja = 2;
    }else{
    if($_GET['success']==0){
        $rejestracja = 0;
    }
    if($_GET['success']==1){
        $rejestracja = 1;
    }
}
require_once "widoki/rejestracja.php";