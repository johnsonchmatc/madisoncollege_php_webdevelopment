<html>
 <head>
  <title>The each() Function</title>
 </head>
 <body bgcolor="CCFFCC">
 <h3>The each() Function</h3>
  <pre><b>
  <?php
    $colors = array('red','green','blue','yellow');
    echo "<u>Numeric Array</u><br />";
    while($array = each($colors)) {
      // echo $array[0] ." => ". $array[1] ."<br />";
      echo $array['key'] ." => ". $array['value'] ."<br />";
    }
    $book = array('Title' => 'War and Peace',
                  'Author' => 'Tolstoy',
                  'Publisher' => "Oxford University Press",
                 );
    echo "<p><u>Associative Array</u> <br />";
    while($novel = each($book)) {
      echo $novel[0] ." => ". $novel[1] ."<br />";
      // echo $novel['key'] ." => ". $novel['value'] ."<br />";
    }
    reset($book);
  ?>
  </b></pre>
 </body>
</html>
