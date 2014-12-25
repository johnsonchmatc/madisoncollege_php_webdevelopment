<?php
  $subject_string = 'He ate 5 pies.';
  echo preg_replace('/5 pies/e',"(5*3) .' cupcakes'",
                    $subject_string);
?>
