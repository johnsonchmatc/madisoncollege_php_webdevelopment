<html>
<head>
</head>
<body>
<?php
  $true = true;
  $false = false;
?>
<h1>Table: Testing Expressions with Logical Operators</h1>
<table border='1px solid'>
  <tr><th>Name</th><th>Example</th><th>Result</th></tr>
  <tr>
    <td>And</td>
    <td>$true && $false</td>
    <td>
      <?php 
          if ($true && $false){
            echo 'Both $true and $false are true';
          }else{
            echo 'One of the values $true or $false are not true';
          }
      ?>
    </td>
  </tr>
  <tr>
    <td>|| (or)</td>
    <td>$true || $false</td>
    <td>
      <?php 
          if ($true || $false){
            echo 'One of the values $true or $false are true';
          }else{
            echo 'Neither of the values $true or $false are true';
          }
      ?>
    </td>
  </tr>
  <tr>
    <td>and</td>
    <td>$true and $false</td>
    <td>
      <?php 
          if ($true and $false){
            echo 'Both of the values $true and $false are true';
          }else{
            echo 'One of the values $true or $false are not true';
          }
      ?>
    </td>
  </tr>
  <tr>
    <td>Or</td>
    <td>$true or $false</td>
    <td>
      <?php 
          if ($true or $false){
            echo 'One of the values $true or $false are true';
          }else{
            echo 'Neither of the values $true or $false are true';
          }
      ?>
    </td>
  </tr>
  <tr>
    <td>Xor</td>
    <td>$true xor $false</td>
    <td>
      <?php 
          if ($true xor $false){
            echo 'One of the values $true or $false are true, but not both';
          }else{
            echo 'One of the values $true or $false are not true, or both are true';
          }
      ?>
    </td>
  </tr>
<!-- ! $aNotTRUE if $a is not TRUE.  -->
  <tr>
    <td>!</td>
    <td>!$true</td>
    <td>
      <?php 
          if (!$true){
            echo '$true is not true';
          }else{
            echo '$true is true';
          }
      ?>
    </td>
  </tr>
</table>
</body>
<html>
