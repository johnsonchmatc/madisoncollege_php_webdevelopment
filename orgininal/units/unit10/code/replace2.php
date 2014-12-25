<?php
   $subject = 'The flag was <em>red, white, </em>and <em>blue</em>.';
   $search = array('/red/','/white/','/blue/');
   $replace = array('yellow','orange','green');

   echo "Before replacement: $subject<br />";
   $subject = preg_replace($search, $replace, $subject);
   echo "After replacement: $subject";
?>
