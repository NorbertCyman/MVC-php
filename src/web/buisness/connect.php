<?php
require '/var/www/dev/vendor/autoload.php';
function get_db()
{
$mongo = new MongoDB\Client(
"mongodb://localhost:27017/wai",
[
'username' => 'wai_web',
'password' => 'w@i_w3b',
]);
$db = $mongo->wai;
return $db;
}
$db = get_db();
// wyczysc baze danych 
// $db->zdjecia->deleteOne(['tytul' => "a"]);    

// $db->users->deleteMany([]);  