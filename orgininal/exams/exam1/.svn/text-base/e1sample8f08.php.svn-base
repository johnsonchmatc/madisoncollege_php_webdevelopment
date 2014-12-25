<?php
  require_once('exceptions.inc.php');
  require_once('functions.inc.php');
  
  $myArray = array(10, 15, 17, 23, 9, 11, 13);

  try {
      echo 'The average is '. average($myArray) . '<br>';
  }

  catch (notArrayException $ex) {
    echo $ex;
  }
  catch (notNumericException $ex) {
    echo $ex;
  }
  catch (Exception $ex) {
    echo $ex;
  }

?>
