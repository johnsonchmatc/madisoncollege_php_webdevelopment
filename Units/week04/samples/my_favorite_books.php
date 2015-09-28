<html>
  <head>
    <title>Precedence and Associativity()</title>
    <style type="text/css"> 
      body { font-size: 12px;font-family: Verdana; }
      .errors h3, 
      .errors li { color: #FF0000;}
      .errors li { margin: 5px 0px;}
    </style>
  </head>
  <body>
    <?php
      $genres = array();
      $fiction = empty($_POST["fiction"]) ? false : array_push($genres, 'Likes Fiction Books');
      $tech = empty($_POST["tech"]) ? false : array_push($genres, 'Likes Tech Books');
      $history = empty($_POST["history"]) ? false : array_push($genres, 'Likes History Books');
      $non_fiction = empty($_POST["non_fiction"]) ? false : array_push($genres, 'Likes Non-Fiction Books');

    ?>

 <?php if (isset($_POST["submit"])) : ?>  
    <?php if (isset($genres) && count($genres) > 0) : ?>
      <h2>You like the following genres of books.</h2>
      <ul>
        <?php foreach($genres as $genre) : ?>
          <li><?= $genre; ?></li> 
        <?php endforeach; ?>
      </ul>
        <p><a href="process.php">Try</a> the survey again!
    <?php else: ?>
    <h2>No Genres Selected</h2>
    <p>Go <a href="process.php">Back</a> and try again!
    <?php endif; ?>
 <?php else : ?>
     <form action="process.php" method="POST">
       Fiction <input type="checkbox" name="fiction" value="1"><br>
       Tech <input type="checkbox" name="tech" value="1"><br>
       History <input type="checkbox" name="history" value="1"><br>
       Non-Fiction <input type="checkbox" name="non_fiction" value="1"><br>
       <input type=submit value="submit" name="submit">
       <input type=reset value="clear">
    </form>
<?php endif; ?>
</body>
</html>
