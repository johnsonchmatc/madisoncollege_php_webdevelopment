<html>
  <head>
    <title>Precedence and Associativity()</title>
  </head>
  <body>


    <?php
      // Because this page also contains the form for users to fill out
      // we guard our entire PHP processing with this if statement 
      if (isset($_POST["submit"])) {
        $error_messages = array();

        // We need a friendly way to capture empty values 
        if (empty($_POST["first"])){
          array_push($errors, 'Please Input a value for First Number:');
        }else{
          $first_number = $_POST["first"];
        }

        if (empty($_POST["second"])){
          array_push($errors, 'Please Input a value for Second Number:');
        }else{
          $second_number = $_POST["second"];
        }

        if (empty($_POST["third"])){
          array_push($errors, 'Please Input a value for Third Number:');
        }else{
          $thrid_number = $_POST["thrid"];
        }

        if (empty($_POST["fourth"])){
          array_push($errors, 'Please Input a value for Fourth Number:');
        }else{
          $fourth_number = $_POST["fourth"];
        }
      }
    ?>


    <?php if (isset($errors) && count($errors) > 0) : ?>
      <h3>There were errors that prevented the calculations from being made.</h3>
      <ul class="errors">
        <?php foreach($errors as $error) : ?>
          <li><?= $error; ?></li> 
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <h2>Please enter the values to calculate:</h2>

    <form action="precedence_associativity_form.php" method="POST">
      <p>First Number: <input type="text" size=3 name="first"><p>
      <p>Second Number: <input type="text" size=3 name="second"></p>
      <p>Third Number: <input type="text" size=3 name="third"></p>
      <p>Fourth Number: <input type="text" size=3 name="fourth"></p>

     <input type=submit value="submit">
     <input type=reset value="clear">
    </form>

    <?php
      if (isset($_POST["submit"]) && count($errors) < 0){
        $result = $first_number + $second_number * $thrid_number / $fourth_number;
        print "$result = $first_number + $second_number * $thrid_number / $fourth_number";

        $result = ($first_number + $second_number) * $thrid_number / ($second_number - $fourth_number);
        print "<br />$result = ( $first_number + $second_number ) * $thrid_number / ($second_number - $fourth_number) ";
      }
    ?>
  </body>
</html>
