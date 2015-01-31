<?php 
  class Car {}

  $boolean = true;
  $integer = 123;
  $integer_negative = -13;
  $float_double = 12.35;
  $string = "Hello World";
  $array = array('one', 'fish', 'two', 'fish', 'red', 'fish');
  $object = new Car();
  //$resource = mysql_connect();
  $null = NULL;

?>

<table border='1px solid;'>
  <tr>
    <th>Type</th>
    <th>gettype() response</th>
  </tr>
  
  <tr>
    <td>Boolean</td>
    <td><?php echo gettype($boolean); ?></td>
  </tr>
  
  <tr>
    <td>Integer</td>
    <td><?php echo gettype($integer); ?></td>
  </tr>
  
  <tr>
    <td>Integer Negative</td>
    <td><?php echo gettype($integer_negative); ?></td>
  </tr>
  
  <tr>
    <td>Float</td>
    <td><?php echo gettype($float_double); ?></td>
  </tr>
  
  <tr>
    <td>String</td>
    <td><?php echo gettype($string); ?></td>
  </tr>
  
  <tr>
    <td>Array</td>
    <td><?php echo gettype($array); ?></td>
  </tr>
</table>