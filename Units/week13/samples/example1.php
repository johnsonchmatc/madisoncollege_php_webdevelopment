<?php
    $width = 100;
    $height = 25;

    $img = imagecreatetruecolor($width, $height);

    // Output the image as a PNG using a header
    header("Content-type: image/png");
    imagepng($img);
?>
