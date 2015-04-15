<html>
 <head>
  <title>The preg_grep() Function</title>
 </head>
 <body bgcolor="lavender">
  <font face="verdana" size="+1">
  <h2>The preg_grep() Function</h2>
  <?php
    $regex = '/Pat/';
    $search_array = array('Margaret','Patsy','Patrick',
                          'Patricia','Jim');
    sort($search_array);
    
    $newArray = preg_grep($regex, $search_array );
    print '<pre>Found '. count($newArray)." matches\n";
    print_r($newArray);

    $newArray = preg_grep($regex, $search_array, PREG_GREP_INVERT);
    print 'Found '. count($newArray)." that didn't match\n";
    print_r($newArray);
    print '</pre>';
  ?>
  </font>
 </body>
</html>
