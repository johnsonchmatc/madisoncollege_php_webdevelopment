<?php

// Chris Johnson
// 123 My Street
// Anytown, WI 53703

function build_address($name, $street, $city, $state, $postal_code){
  echo $name . "<br>";
  echo $street . "<br>";
  echo $city . ", " . $state . " " . $postal_code;
}


$users_name = 'CJ';

build_address($users_name, "123 My Street", "Anytown", "WI", "53703");


?>