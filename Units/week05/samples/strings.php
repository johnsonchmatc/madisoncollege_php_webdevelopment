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
          empty($_POST["strrev"]) ? false : array_push($strings, 'strrev');
          empty($_POST["strtok"]) ? false : array_push($strings, 'strtok');
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
          case 'strtok':
            if(isset($_POST['strtok_token']) && strlen($_POST['strtok_token']) > 0){
              $input = $_POST["input_string"];
              $function = 'strtrok()';
              $token = $_POST['strtok_token'];
              $result = strtok($input, $token);
              $token_results = '';
              while ($result !== false) {
                $token_results =  $token_results . "$result";
                $result = strtok($token);
              }
              array_push($outputs,"Evaluating '$function' on '$input' with an index of '$token' yeilds '$token_results'");
            }else{
              array_push($error_messages, 'Please fill out a token to parse');
            }
          case 'strtoupper':
              $input = $_POST["input_string"];
              $function = 'strtoupper()';
              $result = strtoupper($input);
              array_push($outputs,"Evaluating '$function' on '$input' yeilds '$result'");
            break;
          case 'strrev':
              $input = $_POST["input_string"];
              $function = 'strrev()';
              $result = strrev($input);
              array_push($outputs,"Evaluating '$function' on '$input' yeilds '$result'");
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

<form action="strings.php" method="POST">
  Input String: <input type="text" name="input_string" value="<?= isset($_POST['input_string']) ? $_POST['input_string'] : '' ?>"><br>
  <p>
    stristr()<input type="checkbox" name="stristr" value="1" <?= isset($_POST['stristr']) ? 'checked="true"' : null ?>>
    Find Index Of: <input type="text" name="stristr_index" value="<?= isset($_POST['stristr_index']) ? $_POST['stristr_index'] : '' ?>">
  </p>
  <p>
    strtoupper()<input type="checkbox" name="strtoupper" value="1" <?= isset($_POST['strtoupper']) ? 'checked="true"' : null ?>>
  </p>
  <p>
    strrev()<input type="checkbox" name="strrev" value="1" <?= isset($_POST['strrev']) ? 'checked="true"' : null ?>>
  </p>
  <p>
    strtok()<input type="checkbox" name="strtok" value="1" <?= isset($_POST['strtok']) ? 'checked="true"' : null ?>>
    Token: <input type="text" name="strtok_token" value="<?= isset($_POST['strtok_token']) ? $_POST['strtok_token'] : '' ?>">
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

