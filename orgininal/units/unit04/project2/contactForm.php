<?php
  include("include/header.php");
?>

<h1>Request for contact</h1>
<font face="Verdana, Arial, Helvetica, sans-serif"><br>
<form action="p2script.php" method="POST">
<table cellSpacing=0 cellPadding=0 align=center border=0 borderColor="#CCCCCC">
<tr><td class="dkbrown">Name:</td><td><input type="text" name="name"/></td></tr>
<tr><td class="dkbrown">Email:</td><td><input type="text" name="email"/></td></tr>
<tr><td class="dkbrown">Phone:</td><td><input type="text" name="phone"/></td></tr>
  <tr><td colspan="2"><textarea rows="5" name="message"></textarea></td></tr>
  <tr><td colspan="2"><input type="submit" name="submit" value="Submit"/></td></tr>
</table>
</form>
</font>

<?php
  include("include/footer.php");
?>