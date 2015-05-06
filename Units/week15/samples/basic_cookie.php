<?php
setcookie('usr','Ellie Quigley');
setcookie('color','blue');

if (! empty($_COOKIE['color'])) {
  echo '<pre>';
  print_r($_COOKIE);
  echo '</pre>';
}else{
  echo 'refresh me to see the cookie';
}
?>
