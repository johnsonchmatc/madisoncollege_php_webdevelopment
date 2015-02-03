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
    <th>Value</th>
    <th>gettype() response</th>
  </tr>
  
  <tr>
    <td>Boolean</td>
    <td><?php echo $boolean ?></td>
    <td><?php echo gettype($boolean); ?></td>
  </tr>
  
  <tr>
    <td>Integer</td>
    <td><?php echo $integer ?></td>
    <td><?php echo gettype($integer); ?></td>
  </tr>
  
  <tr>
    <td>Integer Negative</td>
    <td><?php echo $integer_negative ?></td>
    <td><?php echo gettype($integer_negative); ?></td>
  </tr>
  
  <tr>
    <td>Float</td>
    <td><?php echo $float_double ?></td>
    <td><?php echo gettype($float_double); ?></td>
  </tr>
  
  <tr>
    <td>String</td>
    <td><?php echo $string ?></td>
    <td><?php echo gettype($string); ?></td>
  </tr>
  
  <tr>
    <td>Array</td>
    <td><?php echo implode(',', $array); ?></td>
    <td><?php echo gettype($array); ?></td>
  </tr>

  <tr>
    <td>Object</td>
    <td><?php print_r($object); ?></td>
    <td><?php echo gettype($object); ?></td>
  </tr>

<!--
  <tr>
    <td>Resource</td>
    <td><?php print_r($resource); ?></td>
    <td><?php echo gettype($resource); ?></td>
  </tr>
-->

  <tr>
    <td>Null</td>
    <td><?php print_r($null); ?></td>
    <td><?php echo gettype($null); ?></td>
  </tr>
</table>
