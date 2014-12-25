<html>
 <head>
  <title>Extracting Values</title>
 </head>
 <body bgcolor="CCCFFF">
  <font style="arial" size="+1"><b>
  <?php
    $model = 'Pan TH-33XYZXYTV';
    print "Original model number: <em>$model</em><br />";
    $television = array('model' => 'Pan PX-44BBCCSTV',
                        'type' => 'plasma',
                        'color' => 'charcoal bezel',
                        'size' => '42 in. widescreen'
                       );
    // Don't overwrite existing variables
    extract($television, EXTR_SKIP);
    print "Model number after <em>extract(): $model</em><p>";
    print 'Values of variables created by <em>extract():<br />';
    print "$model, $type, $color, $size</em><br />";
  ?>
  </b></font>
 </body>
</html>
