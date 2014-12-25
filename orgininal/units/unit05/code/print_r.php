<html>
 <head>
  <title>The print_r() Function</title>
 </head>
 <body bgcolor="yellow">
  <h3>The print_r() Function</h3>
  <b><pre>
  <?php
    $colors = array('red','green','blue','yellow');
    $book = array('Title' => 'War and Peace',
                  'Author' => 'Tolstoy',
                  'Publisher' => 'Oxford University Press',
                 );
    print_r($colors);
    echo '<hr>';
    print_r($book);
  ?>
  </pre></b>
 </body>
</html>
