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
      //It doesn't hurt to always have an empty array set
      $error_messages = array();

      //Declaring our variables so we don't have to check them in the form
      $first_number = "";
      $second_number = "";
      $third_number = "";
      $fourth_number = "";

      /* 
       Because this page also contains the form for users to fill out
       we guard our entire PHP processing with this if statement 
      */
      if (isset($_POST["submit"])) {
        // We need a friendly way to capture empty values 
        if (empty($_POST["first"])){
          array_push($error_messages, 'Please Input a value for First Number:');
        }else{
          $first_number = $_POST["first"];
        }

        if (empty($_POST["second"])){
          array_push($error_messages, 'Please Input a value for Second Number:');
        }else{
          $second_number = $_POST["second"];
        }

        if (empty($_POST["third"])){
          array_push($error_messages, 'Please Input a value for Third Number:');
        }else{
          $third_number = $_POST["third"];
        }

        if (empty($_POST["fourth"])){
          array_push($error_messages, 'Please Input a value for Fourth Number:');
        }else{
          $fourth_number = $_POST["fourth"];
        }
      }
    ?>


    <?php if (isset($error_messages) && count($error_messages) > 0) : ?>
      <h3>There were errors that prevented the calculations from being made.</h3>
      <ul class="errors">
        <?php foreach($error_messages as $error) : ?>
          <li><?= $error; ?></li> 
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <form action="precedence_associativity_form.php" method="POST">
      <p>First Number: <input type="text" size=3 name="first" value="<?= $first_number ?>"><p>
      <p>Second Number: <input type="text" size=3 name="second" value="<?= $second_number ?>"></p>
      <p>Third Number: <input type="text" size=3 name="third" value="<?= $third_number ?>"></p>
      <p>Fourth Number: <input type="text" size=3 name="fourth" value="<?= $fourth_number ?>"></p>

     <input type=submit value="submit" name="submit">
     <input type=reset value="clear">
    </form>

    <?php if (isset($_POST["submit"]) && count($error_messages) == 0) : ?>
       <?php 
          $result_1 = $first_number + $second_number * $third_number / $fourth_number;
          $result_2 = ($first_number + $second_number) * $third_number / ($second_number - $fourth_number);
        ?>
    
        <p>
          <b>Calculation 1</b> <?="$result_1 = $first_number + $second_number * $third_number / $fourth_number" ?>
        </p>
        <p>
          <b>Calculation 2</b> <?="$result_2 = ( $first_number + $second_number ) * $third_number / ($second_number - $fourth_number)" ?>
        </p>
    
    
    <?php endif; ?>
  </body>
</html>
