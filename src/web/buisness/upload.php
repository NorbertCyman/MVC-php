<?php
$main_extension = "";
$wm_extension = "";
function upload(){
    global $main_extension, $wm_extension; 
    $err = 0;
    $upload_dir = "../images/"; 
    if (isset($_FILES['zdjecie'])) {
        $main_file_name = basename($_FILES['zdjecie']['name']);
        $base_name = pathinfo($main_file_name)['filename'];
        $main_tmp_path = $_FILES['zdjecie']['tmp_name'];
        $main_extension = pathinfo($main_file_name, PATHINFO_EXTENSION);
        $main_target = $upload_dir . $main_file_name;

         if ($main_extension !='png' && $main_extension != 'jpg' && $main_extension != 'jpeg') {
            echo "Zdjęcie ma nieprawidłowy format<br>";
            $err=1;
        }

        $maxFileSize = 1024 * 1024;
        if ($_FILES['zdjecie']['size'] > $maxFileSize) {
            echo "Zdjęcie jest zbyt duże<br>";
            $err=1;
        }

        $counter = 0;
        while(file_exists($main_target)){
            $fileInfo = pathinfo($main_file_name);
            $main_file_name=$base_name."($counter).".$main_extension;
            $main_target = $upload_dir . $main_file_name;
            $counter++;
        }
        if (isset($_FILES['znak_wodny'])) {
            $wm_file_name = "WM" . $main_file_name;
            $wm_tmp_path = $_FILES['znak_wodny']['tmp_name'];
            $wm_extension =   pathinfo(basename($_FILES['znak_wodny']['name']), PATHINFO_EXTENSION);
            $wm_target = $upload_dir . $wm_file_name;
    
            if ($wm_extension !='png' && $wm_extension != 'jpg' && $wm_extension != 'jpeg') {
                echo "Znak wodny ma nieprawidłowy format<br>";
            $err=1;
            }
    
            if ($_FILES['znak_wodny']['size'] > $maxFileSize) {
                echo "Znak wodny jest zbyt duży<br>";
            $err=1;
            }
        }

        if($err==1){
            return 0;
        }

        
        if (move_uploaded_file($main_tmp_path, $main_target)) {
            echo "Zdjęcie zostało pomyślnie przesłane!<br>";
        } else {
            echo "Błąd podczas przesyłania zdjęcia.<br>";
            return 0;
        }
    }

        if (move_uploaded_file($wm_tmp_path, $wm_target)) {
            echo "Znak wodny został pomyślnie przesłany!<br>";
            return $main_file_name;
        } else {
            echo "Błąd podczas przesyłania znaku wodnego.<br>";
            return 0;
        }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['zdjecie']) && isset($_FILES['znak_wodny'])) {
    $nazwa_zdjecia=upload();
    if($nazwa_zdjecia){

        require_once 'connect.php'; // zapis w bazie danych
        $zdjecie = [
            'name' => $nazwa_zdjecia,
            'tytul' => $_POST["tytul"],
            'autor' => $_POST["autor"]
        ];
        $db->zdjecia->insertOne($zdjecie);

        require_once "add_watermark.php"; // dodanie znaku wodnego i zapisanie
        create_watermark_image($nazwa_zdjecia, $main_extension,$wm_extension);

        require_once "create_thumbnail.php"; // tworzenie i zapisaine miniaturki
        create_thumbnail($nazwa_zdjecia, $main_extension);
        // usuwanie pliku ze znakiem wodnym
        unlink("../images/WM$nazwa_zdjecia");
    };
} else {
    echo "Nie przesłano wymaganych plików.";
}


?>
<br />
<br />
<br />
<a href="../galeria">Powrót do Galerii</a>