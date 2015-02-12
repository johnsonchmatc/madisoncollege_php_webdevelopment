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
  date_default_timezone_set('America/Chicago');
  $error_messages = array();
  $month = "";
  $day = "";
  $year = "";
  if (isset($_POST["submit"])) {
    //We need to capture empty values and display friendly error messages
    if (empty($_POST["month"])){
      array_push($error_messages, 'Please Input a value for Month');
    }else{
      $month = $_POST["month"];
    }
    if (empty($_POST["day"])){
      array_push($error_messages, 'Please Input a value for Day');
    }else{
      $day = $_POST["day"];
    }
    if (empty($_POST["year"])){
      array_push($error_messages, 'Please Input a value for Year');
    }else{
      $year = $_POST["year"];
    }
  }
?>
    
  <?php if (isset($error_messages) && count($error_messages) > 0) : ?>
    <h3>There were errors that prevented from verifying your age able to vote.</h3>
    <ul class="errors">
      <?php foreach($error_messages as $error) : ?>
        <li><?= $error; ?></li> 
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
    
  <h3>Enter your brithday:</h3>
    <form action="vote.php" method="POST">
      <input type="text" size=2 name="month" value="<?= $month ?>">-
      <input type="text" size=2 name="day" value="<?= $day ?>">-
      <input type="text" size=4 name="year" value="<?= $year ?>">
      <input type=submit value="submit" name="submit">
      <input type=reset value="clear">
    <form>
      
<?php
  if (isset($_POST["submit"]) && count($error_messages) < 1){     
    $birthday = strtotime("$month-$day-$year");  
    $birthday_plus_18_years = strtotime('+18 years', $birthday);
    $today =  time();
    $over_18 = ($birthday_plus_18_years < $today ? true : false);
  }
?>
      
      <?php if (isset($over_18) && $over_18 == true) :?>
        <h4>Congratulations you are old enough to vote in the United States</h4>
      <?php elseif (isset($over_18) && $over_18 == false) : ?>
        <h4>You are not old enough to vote in the United States</h4>
      <?php else : ?>
        <h4>Tell me how old you are</h4>  
      <?php endif; ?>
  </body>
</html>
