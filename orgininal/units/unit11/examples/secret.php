<?php
  //create short names for variables
  @ $name = $_POST['name'];
  @ $password = $_POST['password'];

  if(empty($name) || empty($password))
  {
    //Visitor needs to enter a name and password
?>
    <h1>Please Log In</h1>
    This page is secret.
    <form method="post" action="secret.php">
    <table border="1">
     <tr>
      <th> Username </th>
      <td> <input type="text" name="name"> </td>
     </tr>
     <tr>
      <th> Password </th>
      <td> <input type="password" name="password"> </td>
     </tr>
     <tr>
      <td colspan="2" align="center">
       <input type="submit" value="Log In">
      </td>
     </tr>
    </table>
    </form>
<?php
  }
  else if($name=='user' && $password=='pass')
  {
    // visitor name and password combination correct
    echo '<h1>Here it is!</h1>';
    echo 'I bet you are glad you can see this secret page.';
  }
  else
  {
    // visitor name and password combination not correct
    echo '<h1>Go Away!</h1>';
    echo 'You are not authorized to view this resource.';
  }
?>
