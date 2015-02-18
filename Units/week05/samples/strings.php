<html>
  <head>
    <style type="text/css"> 
      body { font-size: 12px;font-family: Verdana; }
      .errors h3, 
      .errors li { color: #FF0000;}
      .errors li { margin: 5px 0px;}
    </style>
  </head>
  <body>
    <?php
      $strings = array();
      $errors = array();
      if (isset($_POST["submit"]){
        if (isset($_POST["string"]){
          empty($_POST["stristr"]) ? false : array_push($strings, 'stristr');
        }else{
          array_push($errors, 'Please fill out the Input String field');
        }
      }else{
        $string = '';
        $stristr_index = '';
      }
    ?> 

    <?php
      if (isset($strings) && count($strings) > 0){
        $outputs = array()
        foreach($strings as $string){
          switch ($string) {
          case 'stristr':
            if(isset($_POST['stristr_index']){
              $input = $_POST["string"];
              $function = 'stristr()';
              $index = $_POST['stristr_index'];
              $result = stristr($_POST["string"], $index);
              echo "Evaluating '$function' on '$input' with an index of '$index' yeilds '$result'"
            }else{
              array_push($errors, 'Please fill out the Index you would like to find in the string');
            } 
            break;
        }
      }
    ?>

    <?php if (isset($error_messages) && count($error_messages) > 0) : ?>
      <h3>There were errors that prevented the form from processing.</h3>
      <ul class="errors">
        <?php foreach($error_messages as $error) : ?>
          <li><?= $error; ?></li> 
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <form action="vote.php" method="POST">
      Input String: <input type="text" name="string" value="<?= $string ?>">
      stristr()<input type="checkbox" name="stristr" value="1"> Find Index Of: <input type="text" name="stristr_index" value="<?= $stristr_index ?>">
      <input type=submit value="submit" name="submit">
      <input type=reset value="clear">
    <form>


  </body>
</html>
