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
      $error_messages = array();
      if (isset($_POST["submit"])){
        if (isset($_POST["input_string"]) && strlen($_POST["input_string"]) > 0){
          $input_string = $_POST["input_string"];
          empty($_POST["stristr"]) ? false : array_push($strings, 'stristr');
          empty($_POST["strtoupper"]) ? false : array_push($strings, 'strtoupper');
        }else{
          array_push($error_messages, 'Please fill out the Input String field');
        }
      }
    ?> 

    <?php
      if (isset($strings) && count($strings) > 0){
        $outputs = array();
        foreach($strings as $string){
          switch ($string) {
          case 'stristr':
            if(isset($_POST['stristr_index'])){
              $input = $_POST["input_string"];
              $function = 'stristr()';
              $index = $_POST['stristr_index'];
              $result = stristr($input, $index);
              array_push($outputs,"Evaluating '$function' on '$input' with an index of '$index' yeilds '$result'");
            }else{
              array_push($error_messages, 'Please fill out the Index you would like to find in the string');
            } 
            break;
          case 'strtoupper':
              $input = $_POST["input_string"];
              $function = 'strtoupper()';
              $result = strtoupper($input);
              array_push($outputs,"Evaluating '$function' on '$input' yeilds '$result'");
            break;
          default:
            break;
          }
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

<form action="sample.php" method="POST">
  Input String: <input type="text" name="input_string" value="<?= isset($_POST['input_string']) ? $_POST['input_string'] : '' ?>"><br>
  <p>
    stristr()<input type="checkbox" name="stristr" value="1" <?= isset($_POST['stristr']) ? 'checked="true"' : null ?>>
    Find Index Of: <input type="text" name="stristr_index" value="<?= isset($_POST['stristr_index']) ? $_POST['stristr_index'] : '' ?>">
  </p>
  <p>
    strtoupper()<input type="checkbox" name="strtoupper" value="1" <?= isset($_POST['strtoupper']) ? 'checked="true"' : null ?>>
  </p>
  <p>
    <input type=submit value="submit" name="submit">
    <input type=reset value="clear">
  </p>
<form>

    <?php if (isset($outputs) && count($outputs) > 0) : ?>
      <h3>Here are your outputs:</h3>
      <ul>
        <?php foreach($outputs as $message) : ?>
          <li><?= $message; ?></li> 
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

  </body>
</html>

