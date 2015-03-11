<html>
 <head>
  <title>Process Form using POST</title>
 </head>
 <body bgcolor = "lightgreen"><font size="+1">
  <h2>Here is the form input:</h2>
  <?php
  //Our processing will blow up if the form has not been submitted
  if(isset($_POST["submit"])){
    $form_variables = get_variables_from_request();
    print_statement($form_variables);
  }
    
    function print_statement($vars){
      print_welcome($vars['your_name']);
      print_phone_message($vars['your_phone']);
      print_email_message($vars['your_email_addr']);
    }

    function print_welcome($name){
      print "Welcome to PHP $name!<br />";
    }
    
    function print_phone_message($phone){
      print "Can I call you at $phone?<br />";
    }
    
    function print_email_message($email){
      print "Is it ok to send you email at $email?<br />";
    }

    function get_variables_from_request(){
      $return_array = array();
      $keys = array('your_name', 'your_phone', 'your_email_addr');
      foreach($keys as $key){
       $return_array[$key] = validate_input_params($key);        
      }
      return $return_array;
    }

    function validate_input_params($input_key){
      if(isset($_POST[$input_key]) && $_POST[$input_key] != ""){
        return $_POST[$input_key];
      }else{
        return "";
      }
    }
  ?>
   
   <form action="#" method="POST">
   <p>
     Please enter your name: <br />
   <input type="text" size=50 name="your_name">
   <p>
     Please enter your phone: <br />
   <input type="text" size=50 name="your_phone">
   <p>
     Please enter your email address:<br />
   <input type="text" size=50 name="your_email_addr">
   <p>
   <input type=submit name="submit" value="submit">
   <input type=reset value="clear">
  </form>
 </body>
</html>

