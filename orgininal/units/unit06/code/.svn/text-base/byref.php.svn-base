<html>
 <head>
  <title>Pass by Reference</title>
 </head>
 <body bgcolor="yellow"><font face="arial">
  <b>
  <?php
    $colors = array('red','green','blue');
    $list = print_r ($colors,true);
    html_tags($list);
    echo "$list";
    $string = "Hello, world!";
    html_tags($string,"br");
    echo "$string";
    html_tags($string,"p");
    echo "$string";
    
    function html_tags(&$text, $tags = "pre") {
      switch($tags){
        case 'br':
          $text = "$text<$tags>";
          break;
        case 'p':
          $text = "<$tags>$text";
          break;
        default:
          $text = "<$tags>$text</$tags>";
          break;
      }
    }
  ?>
 </body>
</html>
