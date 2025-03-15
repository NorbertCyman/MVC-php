<?php
function pobierz_zdjecia(){
require_once 'buisness/connect.php';
$page = 1;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
$pageSize = 3;
$opts = [
'skip' => ($page - 1) * $pageSize,
'limit' => $pageSize
];
$ilosc_stron = ceil($db->zdjecia->count()/3);
$zdjecia = $db->zdjecia->find([], $opts);

$data = [
    'zdjecia' => $zdjecia,
    'ilosc_stron' => $ilosc_stron
];
return $data;
}