<?php

function create_thumbnail($image, $extension){
    if($extension=="png"){
        $source_image = imagecreatefrompng("../images/A$image");}
        else{
        $source_image = imagecreatefromjpeg("../images/A$image");
        }
        if(!$source_image){
            die("Nie udało sie utworzyc miniaturki");
    }
    $thumbnail = imagecreatetruecolor(200, 125);
    $source_image_width = imagesx($source_image);
    $source_image_height = imagesy($source_image);

    imagecopyresampled(
        $thumbnail,
        $source_image,
        0, 0, 0, 0,
        200, 125,
        $source_image_width, $source_image_height
    );

    if($extension=="png"){
        imagepng($thumbnail, "../images/min$image");
    }
    else{
        imagejpeg($thumbnail, "../images/min$image");
    }
}