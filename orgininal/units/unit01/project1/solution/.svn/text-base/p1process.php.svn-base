<?php
  // create short variable names
  $calqty = $_POST['calqty'];
  $pigsqty = $_POST['pigsqty'];
  $deerqty = $_POST['deerqty'];
  $find = $_POST['find'];
?>
<html>
<head>
  <title>RPCV of Wisconsin - Order Results</title>
</head>
<body>
<h1>RPCV of Wisconsin</h1>
<h2>Order Results</h2>
<?php

echo '<p>Order processed at ';
echo date('H:i, jS F');
echo '</p>';

echo '<p>Your order is as follows: </p>';

$totalqty = 0;
$totalqty = $calqty + $pigsqty + $deerqty;
echo 'Items ordered: '.$totalqty.'<br />';

if( $totalqty == 0)
{
  echo 'You did not order anything on the previous page!<br />';
}
else
{
  if ( $calqty > 0 )
    echo $calqty.' 2005 Calendars @ $10.00<br />';
  if ( $pigsqty > 0 )
    echo $pigsqty.' Pigs Postcards @ $0.15<br />';
  if ( $deerqty > 0 )
    echo $deerqty.' Reindeer Postcards @ $0.25<br />';
}

$totalamount = 0.00;

define('CALPRICE', 10);
define('PIGSPRICE', 0.15);
define('DEERPRICE', 0.25);

$totalamount = $calqty * CALPRICE
             + $pigsqty * PIGSPRICE
             + $deerqty * DEERPRICE;

echo 'Subtotal: $'.number_format($totalamount,2).'<br />';

$taxrate = 0.05;  // local sales tax is 5%
$totalamount = $totalamount * (1 + $taxrate);
echo 'Total including tax (5%): $'.number_format($totalamount,2).'<br />';


if($find == 'a')
  echo '<p>Member or regular customer.</p>';
elseif($find == 'b')
  echo '<p>Customer referred by NPCA ad.</p>';
elseif($find == 'c')
  echo '<p>Customer referred by Peace Corps directory.</p>';
elseif($find == 'd')
  echo '<p>Customer referred by member or other customer.</p>';
else
  echo '<p>We do not know how this customer found us.</p>';


?>
</body>
</html>
