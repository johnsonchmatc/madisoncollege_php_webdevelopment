<html>
 <head>
  <title>Extracting Values and Adding Prefixes
  </title>
 </head>
 <body bgcolor="CCCFFF">
  <h3>Extracting Values and Adding Prefixes</h3>
  <font style="arial" size="+1"><b>
  <?php
    $model = 'Pan TH-33XYZXYTV';
    print "Original model number: <em>$model</em><br />";
    $television = array('model' => 'Pan PX-44BBCCSTV',
                        'type' => 'plasma',
                        'color' => 'charcoal bezel',
                        'size' => '42 in. widescreen',
                       );
    // Adding a prefix
    extract($television, EXTR_PREFIX_ALL,'myvar');
    print 'Variables created by <em>extract()</em> all have
           prefixes. Here are the values:<br />';
    print "$myvar_model, $myvar_type, $myvar_color, $myvar_size
           </em><br />";
  ?>
 </body>
</html>
