<?php
    if(!isset($_GET['success'])){
        $logowanie = 2;
    }else{
    if($_GET['success']==0){
        $logowanie = 0;
    }
    if($_GET['success']==1){
        $logowanie = 1;
    }
}
require_once "widoki/logowanie.php";