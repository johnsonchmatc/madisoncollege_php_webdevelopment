<html>
 <head>
  <title>Sample2 Script</title>
 </head>
 <body bgcolor="lavender">
  <?php
    $regex = '/pat/i';
    $search_array = array('Fitzpatrick','Peggy','Patrick',
                          'Patricia','Johnathon');
    $newArray = preg_grep($regex, $search_array);
    print '<pre>Found '. count($newArray)." matches\n";
    print_r($newArray);

    $newArray = preg_grep($regex, $search_array, PREG_GREP_INVERT);
    print 'Found '. count($newArray)." that didn't match\n";
    print_r($newArray);
    print '</pre>';
  ?>
 </body>
</html>
