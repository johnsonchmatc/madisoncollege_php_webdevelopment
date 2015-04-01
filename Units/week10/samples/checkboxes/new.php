<?php
   extract($_POST);
   if (is_array($place)) {
     print "<ul>";
     foreach ($place as $key => $value ) {
       print "<li>$key=>$value</li>";
     }
     print "</ul>";
   }
 ?>
