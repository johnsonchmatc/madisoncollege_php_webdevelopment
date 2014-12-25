<html>
 <head>
  <title>Array of Books</title>
 </head>
 <body bgcolor="lightblue">
  <h2>Defining an associative array</h2>
  <?php
    $book = array('Title' => 'War and Peace',
                  'Author' => 'Tolstoy',
                  'Publisher' => 'Oxford University Press'
                 );
    $book['ISBN'] = "0192833987"; // Add a new element
    echo "<b>\$book is $book.<br />";
    echo "\$book['Title'] is ". $book['Title'].".<br />";
    echo "\$book['Author'] is ". $book['Author'] .".<br />";
    echo "\$book['Publisher'] is ". $book['Publisher'].".<br />";
    echo "\$book['ISBN'] is ". $book['ISBN'].".<br />";
  ?>
 </body>
</html>
