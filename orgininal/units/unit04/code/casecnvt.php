<html>
 <head>
  <title>Case Conversion</title>
 </head>
 <body>
  <?php
    $string = "exit here!!";
    // Returns: EXIT HERE!!
    echo mb_convert_case($string, MB_CASE_UPPER,"UTF-8"), '<br /><br />';

    $string = "förvaras oåtkomligt för barn";
    // Returns: Förvaras Oåtkomligt För Barn
    echo mb_convert_case($string, MB_CASE_TITLE,"ISO-8859-15"), '<br />';
  ?>
 </body>
</html>
