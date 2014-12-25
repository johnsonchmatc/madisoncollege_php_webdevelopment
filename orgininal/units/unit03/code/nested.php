<html>
 <head><title>Looping</title></head>
  <body bgcolor="lightgreen">
  <font face="arial" size="+1">
  <div align="center">
  <b>
  <?php
    $character = "**";
    echo "*";
    for ($row=0; $row < 10; $row++) {
      for ($col=0; $col < $row; $col++) {
        echo $character;
      }
      echo "<br />";
    }
    echo "| |<br />";
  ?>
  <font color='red'>Merry Christmas!</font>
  </font><br />
  </div>
 </body>
</html>
