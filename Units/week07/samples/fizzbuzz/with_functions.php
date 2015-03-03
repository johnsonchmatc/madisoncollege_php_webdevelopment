<?php
function generate_output($value){
  if (is_fizz($value) && !is_buzz($value)){
    return "fizz";
  }

  if (is_buzz($value) && !is_fizz($value)){
    return "buzz";
  }

  if (is_fizz_buzz($value)){
    return "fizzbuzz";
  }

  return $value;
}

function is_fizz_buzz($value){
  return is_fizz($value) && is_buzz($value) ? true : false;
}

function is_fizz($number){
  return ($number%3) == 0 ? true : false;
}

function is_buzz($number){
  return ($number%5) == 0 ? true : false;
}
?>