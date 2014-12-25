<html>
 <head>
  <title>Hidden Fields</title>
 </head>
 <body bgcolor="#ff66ff">
  <font face="verdana">
  <div align="center">
  <b>
  <?php
    if (isset($_POST['feedback1']) &&
        ($_POST['feedback1'] =='process_form1')) {
      process_form1();
    }
    else {
      display_form1();
    }

    function display_form1() {
      echo <<<EOF
        <form action="$_SERVER[PHP_SELF]" method="post">
         Rate this page
         <br /><b /r>
         <input type="radio" name="rating" value="excellent"
                />Really kewl
         <input type="radio" name="rating" value="average" />OK
         <input type="radio" name="rating" value="poor" />Boring
         <input type="radio" name="rating" value="hopeless"
                />Totally hopeless
         <input type="hidden" name="feedback1"
                value="process_form1">
         <input type="hidden" name="creation_date"
                value="Feb. 2006" />
         <p>
         <input type="submit" value="submit rating" />
         <input type="reset" value="clear" />
        </form>
EOF;
    }
    function process_form1(){
      echo 'So you think this page is '
          . $_POST['rating'] .'!<br />';
    }
  ?>
  </b>
  </div>
 </body>
</html>
