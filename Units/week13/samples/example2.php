<?php
    $width = 100;
    $height = 25;

    $img = imagecreatetruecolor($width, $height);

    // Set a white background with black text and gray graphics
    $bg_color = imagecolorallocate($img, 255, 255, 255);    // white
    $text_color = imagecolorallocate($img, 0, 0, 0);        // black
    $graphic_color = imagecolorallocate($img, 64, 64, 64);  // dark gray

    // Add white background
    imagefilledrectangle($img, 0, 0, $width, $height, $bg_color);

    // Draw some black text on the image starting at coordinate 5,5 with a size of 4
    imagestring($img, 4, 5, 5, 'some text', $text_color);

    // Rotate image 5 degrees clockwise
    $rotated_img = imagerotate($img, -5, $bg_color);

    // Output the image as a PNG using a header
    header("Content-type: image/png");
    imagepng($rotated_img);

    // Destroy the image resources
    imagedestroy($rotated_img);
    imagedestroy($img);
?>
