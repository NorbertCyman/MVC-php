<?php
// usuwanie sesji (wylogowanie)
function logout(){
    session_unset();
    session_destroy();
}
logout();
require_once "widoki/wyloguj.php";