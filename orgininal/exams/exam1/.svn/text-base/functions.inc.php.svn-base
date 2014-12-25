<?php
  function average($numArray) {
    if (!is_array($numArray))
      throw new notArrayException('Input to Average not an array!',1001);
    
    $total = 0;
    $itemCount = count($numArray);
    if ($itemCount == 0)
      throw new emptyArrayException('Input to Average an empty array!',1002);
  
    foreach ($numArray as $i) {
      if (!is_numeric($i))
        throw new notNumericException('Input array has nonnumeric elements!',1003);
          
      $total += $i;
    }
    return $total / $itemCount;
  }
?>
