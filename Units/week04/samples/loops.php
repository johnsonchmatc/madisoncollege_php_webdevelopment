<h1>Welcome High rollers</h1>
<?php
$die_1 = 1;
$die_2 = 2;
?>
<?php do { ?>
<?php
  $die_1 = rand(1,6);
  $die_2 = rand(1,6);
?>
  <p>You rolled a <?=$die_1?> and a <?=$die_2?></p>
<?php }while( $die_1 != $die_2 ); ?>
