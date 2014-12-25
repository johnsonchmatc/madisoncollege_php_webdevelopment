<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<?php
  // create short variable names
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];
  $address = $_POST['address'];

  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>

<html>
  <head>
    <meta name="generator" content="HTML Tidy, see www.w3.org">

    <title>Bob's Auto Parts - Order Results</title>
  </head>

  <body>
    <h1>Bob's Auto Parts</h1>

    <h2>Order Results</h2>
    <?php
    $date = date('H:i, jS F');

    echo '<p>Order processed at ';
    echo $date;
    echo '</p>';

    echo '<p>Your order is as follows: </p>';

    $totalqty = 0;
    $totalqty = $tireqty + $oilqty + $sparkqty;
    echo 'Items ordered: '.$totalqty.'<br />';

    if( $totalqty == 0)
    {
      echo 'You did not order anything on the previous page!<br />';
    }
    else
    {
      if ( $tireqty>0 )
        echo $tireqty.' tires<br />';
      if ( $oilqty>0 )
        echo $oilqty.' bottles of oil<br />';
      if ( $sparkqty>0 )
        echo $sparkqty.' spark plugs<br />';
    }

    $totalamount = 0.00;

    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);

    $totalamount = $tireqty * TIREPRICE
                 + $oilqty * OILPRICE
                 + $sparkqty * SPARKPRICE;

    $totalamount=number_format($totalamount, 2, '.', ' ');

    echo '<p>Total of order is '.$totalamount.'</p>';
    echo '<p>Address to ship to is '.$address.'</p>';

    $outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil\t"
                      .$sparkqty." spark plugs\t\$".$totalamount
                      ."\t". $address."\n";

    // open file to append HERE with fopen(), use a file handle named: $fp


    if (!$fp)  // Note the use of $fp as the file handle!
    {
      echo '<p><strong> Your order could not be processed at this time.  '
           .'Please try again later.</strong></p></body></html>';
      exit;
    } 

    // Now write the output string to the file using fwrite()

    // And close the file with fclose()


    echo '<p>Order written.</p>'; 
    ?>
  </body>
</html>


