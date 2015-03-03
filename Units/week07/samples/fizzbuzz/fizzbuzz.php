<html>
 <head>
  <title>Fizzbuzz</title>
 </head>
  <body>
    <div style="float:left;">
      <h2>Without Functions</h2>
        <?php include 'without_functions.php'; ?>
    </div>
    
    <div style="float:left;">
      <h2>With Functions</h2>
      
      <?php include 'with_functions.php'; ?>
     <?php for($i = 1; $i < 101; $i++): ?>
        <?= generate_output($i) ?><br>
     <?php endfor; ?>
    </div>
    
  </body>
</html>