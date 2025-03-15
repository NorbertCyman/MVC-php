<?php
function create_watermark_image($image, $main_extension, $wm_extension){
    if($main_extension=="png"){
    $source_image = imagecreatefrompng("../images/$image");}
    else{
    $source_image = imagecreatefromjpeg("../images/$image");
    }
    if(!$source_image){
        die("Nie udało sie dodac znaku wodnego");
    }

    if($wm_extension=="png"){
        $wm_image = imagecreatefrompng("../images/WM$image");}
    else{
        $wm_image = imagecreatefromjpeg("../images/WM$image");
    }
        if(!$wm_image){
        die("Nie udało sie dodac znaku wodnego");
    }

    $watermark_width = imagesx($wm_image);
    $watermark_height = imagesy($wm_image);

    imagecopy($source_image, $wm_image, 0, 0, 0, 0, $watermark_width, $watermark_height);
    if($main_extension=="png"){
        imagepng($source_image, "../images/A$image");
    }
    else{
        imagejpeg($source_image, "../images/A$image");
    }

    imagedestroy($source_image);
    imagedestroy($wm_image);
}